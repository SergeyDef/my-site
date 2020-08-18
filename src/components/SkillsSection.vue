<template>
  <section class="skills">
  	<div class="skills__substrate">
  		<h6>My Skills</h6>
  	</div>
  	<div class="skills__info info">
      <div class="info__title">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-exclamation-diamond-fill info__icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				  <path fill-rule="evenodd" d="M9.05.435c-.58-.58-1.52-.58-2.1 0L.436 6.95c-.58.58-.58 1.519 0 2.098l6.516 6.516c.58.58 1.519.58 2.098 0l6.516-6.516c.58-.58.58-1.519 0-2.098L9.05.435zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
				</svg>
        <h2>My Skills</h2>
      </div>
      <div class="info__text">
        <p>В первый раз сцепление на Донфенге накрылось после пробега в 32 тысячи километров! После снятия коробки выяснилось следущее: во-первых сами накладки диска гавно- сажа.</p>
      </div>
    </div>
    <div class="skills__menu menu">
    	<ul class="menu__wrapper">
    		<li class="menu__item"><span>webdevelopment</span></li>
    		<li class="menu__item"><span>webdevelopment</span></li>
    		<li class="menu__item"><span>webdevelopment</span></li>
    		<li class="menu__item"><span>webdevelopment</span></li>
    		<li class="menu__item"><span>webdevelopment</span></li>
    	</ul>
    </div>
    <div class="skills__professional professional">
    	<div class="professional__title">
    		<h5>Проффесиональные навыки</h5>
    	</div>
    	<div class="professional__wrapper">
				<div class="professional__block">
					<div class="professional__item">
						<div class="professional__name"><span>HTML5</span></div>
						<div class="progress professional__progress">
						  <div class="progress-bar html__line" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
						</div>
	    		</div>
	    		<div class="professional__item">
	    			<div class="professional__name"><span>CSS3</span></div>
						<div class="progress professional__progress">
						  <div class="progress-bar css__line" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
						</div>
					</div>
					<div class="professional__item">
	    			<div class="professional__name"><span>bootstrap-4</span></div>
						<div class="progress professional__progress">
							<div class="progress-bar bootstrap__line" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
						</div>
					</div>
	    	</div>
				<div class="professional__block">
	    		<div class="professional__item">
	    			<div class="professional__name"><span>javaScript</span></div>
						<div class="progress professional__progress">
							<div class="progress-bar javascript__line" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">45%</div>
						</div>
					</div>
					<div class="professional__item">
	    			<div class="professional__name"><span>React.js</span></div>
						<div class="progress professional__progress">
							<div class="progress-bar react__line" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
						</div>
					</div>
					<div class="professional__item">
	    			<div class="professional__name"><span>Vue.js</span></div>
						<div class="progress professional__progress">
						  <div class="progress-bar vue__line" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
						</div>
					</div>
	    	</div>
    	</div>
    </div>
    <div class="language">
    	<div class="language__title">
    		<h5>Languages skills</h5>
    	</div>
    	<div class="language__wrapper">
	    	<div class="language__text">
	    		<p>В первый раз сцепление на Донфенге накрылось после пробега в 32 тысячи километров! После снятия коробки выяснилось следущее: во-первых сами накладки диска гавно- сажа.</p>
	    	</div>
	    	<div class="language__chart">
	    		<div class="language__block">Русский</div>
	    		<div class="language__block">Английский</div>
	    		<div class="language__block">Немецкий</div>
	    	</div>
	    </div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'SkillsSection',
  props: {
    msg: String
  }
}
</script>

<style scoped lang="scss">
@import '@/scss/_mixins.scss';
@import '@/scss/style.scss';
@import '~bootstrap/dist/css/bootstrap.min.css';
  .skills{
    @include blockMain(100%, 12%);
    position: relative;
    padding: 4% 6%;
    flex-direction: column;

    .skills__substrate{
     	@include substrate(90%, 90%);
    }
    .skills__substrate>h6{
     	@include substrateText(4rem, 900, 0.1);
    }
    .menu{
    	z-index: 8;
    	width: 100%;
    	height: 10%;

    	.menu__wrapper{
    		width: 100%;
    		height: 100%;
    		display: flex;
    	}
    	.menu__item{
    		display: flex;
    		padding: 6px 16px;
    		height: 50%;
    	}
    	.menu__item:hover{
    		background-color: #ffffff;
    		cursor: pointer;
    		z-index: 9;
    		box-shadow:1px 1px 100px 1px rgba(0,0,0,0.21);
			  -webkit-box-shadow:1px 1px 100px 1px rgba(0,0,0,0.21);
			 	-moz-box-shadow:1px 1px 100px 1px rgba(0,0,0,0.21);
    	}
    	.menu__item>span{
    		margin: auto;
    	}
    }
    .skills__professional{
    	display: flex;
    	padding: 4%;
    	flex-direction: column;
    	width: 100%;
    	height: 40%;
    	background-color: #ffffff;
    	box-shadow:1px 1px 100px 1px rgba(0,0,0,0.21);
		  -webkit-box-shadow:1px 1px 100px 1px rgba(0,0,0,0.21);
			-moz-box-shadow:1px 1px 100px 1px rgba(0,0,0,0.21);
    }
    .professional{

    	.professional__title{
    		@include headingMinBlock(100%, 30%);
    	}
    	.professional__title>h5{
    		@include headingMin(1rem, 700);
    	}
    	.professional__wrapper{
    		width: 100%;
    		height: 70%;
    		display: flex;
    		justify-content: space-between;
    	}
    	.professional__block{
				width: 46%;
				height: 100%;
				display: flex;
				flex-direction: column;
    		justify-content: space-between;
    	}
    	.professional__item{
				display: flex;
				justify-content: space-between;
    	}
    	.professional__name{
    		width: 20%;
    		text-align: left;
    	}
    	.professional__name>span{
    		font-size: 0.865rem;
    		color: #7A7A7A;
    	}
    	.professional__progress{
    		width: 70%;
    	}
    	.html__line{
    		background-color: #2196F3;
    	}
    	.bootstrap__line{
    		background-color: #26A59A;
    	}
    	.css__line{
    		background-color: #EE534F;
    	}
    	.javascript__line{
    		background-color: #3F51B5;
    	}
    	.react__line{
    		background-color: #FCC02C;
    	}
    	.vue__line{
    		background-color: #AB46BC;
    	}
    }
    .language{
    	width: 100%;
    	height: 30%;
    	padding-top: 5%;

    	.language__title{
    		@include headingMinBlock(100%, 30%);
    	}
    	.language__title>h5{
    		@include headingMin(1rem, 700);
    	}
    	.language__wrapper{
    		width: 100%;
    		display: flex;
    	}
    	.language__text{
    		width: 40%;
    		text-align: left;
    	}
    	.language__chart{
    		width: 60%;
    		display: flex;
    	}
    	.language__block{
    		width: 33.33%;
    	}
    }
  }
</style>
