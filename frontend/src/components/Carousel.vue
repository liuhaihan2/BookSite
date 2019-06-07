<template>
  <a-carousel arrows>
    <div
      slot="prevArrow"
      class="custom-slick-arrow"
      style="left: -65px;zIndex: 1"
    >
      <a-icon type="left-circle" />
    </div>
    <div
      slot="nextArrow"
      class="custom-slick-arrow"
      style="right: -65px"
    >
      <a-icon type="right-circle" />
    </div>
    <div>
        <img src="../assets/image/carousel1.png" width="100%" height="100%">
    </div>
    <div>
        <img src="../assets/image/carousel2.png" width="100%" height="100%">
    </div>
    <div>
        <img src="../assets/image/carousel3.png" width="100%" height="100%">
    </div>
    <div>
        <img src="../assets/image/carousel4.png" width="100%" height="100%">
    </div>
  </a-carousel>
</template>
<script>
export default {}
</script>
<style scoped>
/* For demo */
.ant-carousel {
    width: 35%;
    /* height: 500px; */
    position: absolute;
    top: 125px;
    right: 280px;
}
.ant-carousel >>> .slick-slide {
  text-align: center;
  height: 220px;
  line-height: 220px;
  background-image:url('../assets/image/carousel-bg.png');
  background-size: 100% 100%;
  overflow: hidden;
}

.ant-carousel >>> .custom-slick-arrow {
  width: 25px;
  height: 25px;
  font-size: 25px;
  color: #9e3c3d;
  opacity: 0.3;
}
.ant-carousel >>> .custom-slick-arrow:before {
  display: none;
}
.ant-carousel >>> .custom-slick-arrow:hover {
  color: #9e3c3d;
  opacity: 0.7;
}

.ant-carousel >>> .slick-slide  h3 {
  color: #fff;
}
</style>
