<template>
        <div class="login" style="background-color: rgb(235, 235, 235);height: 800px">
                <!-- eslint-disable-next-line -->
          <object type="application/x-shockwave-flash" style="outline:none;width: 90%; height: 750px; margin-top:-50px" data="http://cdn.abowman.com/widgets/fish/fish.swf?up_fishColor4=C4B794&up_fishColor9=851B0D&up_fishColor6=851B0D&up_fishColor5=C4B794&up_fishColor10=C4B794&up_foodColor=C4B794&up_fishColor3=851B0D&up_fishColor1=851B0D&up_fishColor8=851B0D&up_fishColor2=C4B794&up_numFish=8&up_fishName=Fish&up_fishColor7=C4B794&up_backgroundImage= &up_backgroundColor=EBEBEB&" width="300" height="200"><param name="movie" value="http://cdn.abowman.com/widgets/fish/fish.swf?up_fishColor4=C4B794&up_fishColor9=851B0D&up_fishColor6=851B0D&up_fishColor5=C4B794&up_fishColor10=C4B794&up_foodColor=C4B794&up_fishColor3=851B0D&up_fishColor1=851B0D&up_fishColor8=851B0D&up_fishColor2=C4B794&up_numFish=8&up_fishName=Fish&up_fishColor7=C4B794&up_backgroundImage= &up_backgroundColor=EBEBEB&"></param><param name="AllowScriptAccess" value="always"></param><param name="wmode" value="opaque"></param><param name="scale" value="noscale"/><param name="salign" value="tl"/></object>
          <div style="margin-top: -650px;">
              <div class="login-container">
                  <a-form
                      id="components-form-demo-normal-login"
                      :form="form"
                      class="login-form"
                      @submit="handleSubmit"
                  >
                      <a-form-item>
                          <h1>拾&nbsp;&nbsp;&nbsp;&nbsp;书</h1>
                          <span>拾起属于你的那本书</span>
                      </a-form-item>
                      <a-form-item>
                          <a-input
                          v-decorator="[
                              'userName',
                              { rules: [{ required: true, message: '请输入你的用户名!' }] }
                          ]"
                          placeholder="用户名"
                          >
                          <a-icon
                              slot="prefix"
                              type="user"
                              style="color: rgba(0,0,0,.25)"
                          />
                          </a-input>
                      </a-form-item>
                      <a-form-item>
                            <a-input
                            v-decorator="[
                                'userName',
                                { rules: [{ required: true, message: '请输入你的邮箱!' }] }
                            ]"
                            placeholder="邮箱"
                            >
                            <a-icon
                                slot="prefix"
                                type="mail"
                                style="color: rgba(0,0,0,.25)"
                            />
                            </a-input>
                      </a-form-item>
                      <a-form-item>
                          <a-input
                              v-decorator="[
                              'password',
                              { rules: [{ required: true, message: '请输入密码!' }] }
                              ]"
                              type="password"
                              placeholder="密码"
                          >
                              <a-icon
                                  slot="prefix"
                                  type="lock"
                                  style="color: rgba(0,0,0,.25)"
                              />
                          </a-input>
                      </a-form-item>
                      <a-form-item>
                              <a-button
                              type="primary"
                              html-type="submit"
                              class="login-form-button"
                              >
                              注&nbsp;&nbsp;册
                              </a-button>
                              或者 <a href="/rank">
                              马上登录!
                              </a>
                      </a-form-item>
                  </a-form>
              </div>
          </div>
        </div>
      </template>
<script>
    export default {
        data() {
            return {
                formLayout: 'horizontal',
                form: this.$form.createForm(this),
            };
        },
        methods: {
            handleSubmit(e) {
                e.preventDefault();
                this.form.validateFields((err, values) => {
                    if (!err) {
                        // eslint-disable-next-line
                        console.log('Received values of form: ', values);
                    }
                });
            },
            handleSelectChange(value) {
                // eslint-disable-next-line
                console.log(value);
                this.form.setFieldsValue({
                    note: `Hi, ${value === 'male' ? 'man' : 'lady'}!`,
                });
            },
        },
    };
</script>
<style lang="less" scoped>
    canvas {
        display: block;
        width: 100%;
        height: 700%;
    }

    .login {
        padding: 100px;
        div h1 {
            font-size: 50px;
            margin-top: 50px;
        }
        div span {
            color: rgb(157, 59, 60);
        }
        .login-container {
            margin: 20px auto 0 auto;
            width: 27%;
            text-align: center
        }
    }

    #components-form-demo-normal-login .login-form {
        max-width: 300px;
    }

    #components-form-demo-normal-login .login-form-forgot {
        float: right;
    }

    #components-form-demo-normal-login .login-form-button {
        width: 100%;
    }
</style>
