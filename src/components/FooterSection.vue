<template>
  <section class="footer">
  	
  </section>
</template>

<script>
export default {
  name: 'FooterSection',
  props: {
    msg: String
  }
}
</script>

<style scoped lang="scss">
@import '@/scss/_mixins.scss';
@import '~bootstrap/dist/css/bootstrap.min.css';
  .footer{
		@include blockMain(100%, 1%);
			position: relative;
	}
</style>
