import fetchIntercept from 'fetch-intercept';
import router from '@/router'
const api = window.fetch
fetchIntercept.register({
    request: function (url, config) {
        // Modify the url or config here
        // eslint-disable-next-line
        console.log('请求 好dfdsff使')
        if (window.localStorage.ACCESS_TOKEN) {
            config.headers.Authorization = 'Bearer ' + window.localStorage.ACCESS_TOKEN
        }
        return [url, config];
    },
    requestError: function (error) {
        // Called when an error occured during another 'request' interceptor call
        return Promise.reject(error);
    },
    response: function (response) {
        // Modify the reponse object
        // eslint-disable-next-line
        console.log('响应 好dfdsff使')
        if (response.status === 401) { // token过期
            window.localStorage.removeItem('ACCESS_TOKEN')
            router.replace({
                path: '/user/login',
                query: {
                    redirect: router.currentRoute.fullPath
                }
            })
        }
        return response;
    },

    responseError: function (error) {
        // Handle an fetch error
        return Promise.reject(error);
    }
});
export default api
