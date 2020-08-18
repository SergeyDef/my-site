<template>
  <section class="reviews">
  	<div class="reviews__substrate">
  		<h6>Отзывы</h6>
  	</div>
  	<div class="reviews__info info">
      <div class="info__title">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trophy info__icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path d="M3 1h10c-.495 3.467-.5 10-5 10S3.495 4.467 3 1zm0 15a1 1 0 0 1 1-1h8a1 1 0 0 1 1 1H3zm2-1a1 1 0 0 1 1-1h4a1 1 0 0 1 1 1H5z"/>
          <path fill-rule="evenodd" d="M12.5 3a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-3 2a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm-6-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-3 2a3 3 0 1 1 6 0 3 3 0 0 1-6 0z"/>
          <path d="M7 10h2v4H7v-4z"/>
          <path d="M10 11c0 .552-.895 1-2 1s-2-.448-2-1 .895-1 2-1 2 .448 2 1z"/>
        </svg>
        <h2>Отзывы</h2>
      </div>
      <div class="info__text">
        <p>В первый раз сцепление на Донфенге накрылось после пробега в 32 тысячи километров! После снятия коробки выяснилось следущее: во-первых сами накладки диска гавно- сажа.</p>
      </div>
    </div>
    <div class="reviews__client client">
    	<div class="tab-content client__feedback" id="nav-tabContent">
				<div class="tab-pane fade show active client__wrapper" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
					<div class="client__ava">
						<div class="client__img">
							<img src="@/assets/reviews/1.jpg" alt="photo">
						</div>
					</div>
					<div class="client__block">
						<div class="client__title">
							<h5>Александр Котов</h5>
						</div>
						<div class="client__text">
							<p>В первый раз сцепление на Донфенге накрылось после пробега в 32 тысячи километров! После снятия коробки выяснилось следущее: во-первых сами накладки диска гавно- сажа.</p>
						</div>
						<div class="client__link">
							<a href="">http://localhost:8080/</a>
						</div>
					</div>
				</div>
				<div class="tab-pane fade client__wrapper" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
					<div class="client__ava">
						<div class="client__img">
							<img src="@/assets/reviews/2.jpg" alt="photo">
						</div>
					</div>
					<div class="client__block">
						<div class="client__title">
							<h5>Елена Кровцова</h5>
						</div>
						<div class="client__text">
							<p>В первый раз сцепление на Донфенге накрылось после пробега в 32 тысячи километров! После снятия коробки выяснилось следущее: во-первых сами накладки диска гавно- сажа.</p>
						</div>
						<div class="client__link">
							<a href="">http://localhost:8080/</a>
						</div>
					</div>
				</div>
			</div>
			<nav class="client__menu menu">
				<div class="nav nav-tabs menu__block" id="nav-tab" role="tablist">
				  <a class="nav-item nav-link active menu__item" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">
				  	<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right-short" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						  <path fill-rule="evenodd" d="M8.146 4.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.793 8 8.146 5.354a.5.5 0 0 1 0-.708z"/>
						  <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5H11a.5.5 0 0 1 0 1H4.5A.5.5 0 0 1 4 8z"/>
						</svg>
				  </a>
				  <a class="nav-item nav-link menu__item" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">
				  	<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-left-short" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						  <path fill-rule="evenodd" d="M7.854 4.646a.5.5 0 0 1 0 .708L5.207 8l2.647 2.646a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 0 1 .708 0z"/>
						  <path fill-rule="evenodd" d="M4.5 8a.5.5 0 0 1 .5-.5h6.5a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5z"/>
						</svg>
				  </a>
				</div>
			</nav>
		</div>
		<div class="reviews__customer customer">
			<ul class="customer__wrapper">
				<li class="customer__item">
					<div class="customer__img"><img src="@/assets/reviews/ava.jpg" alt="photo"></div>
					<div class="customer__name"><span>Ваш отзыв</span></div>
				</li>
				<li class="customer__item">
					<div class="customer__img"><img src="@/assets/reviews/ava.jpg" alt="photo"></div>
					<div class="customer__name"><span>Ваш отзыв</span></div>
				</li>
				<li class="customer__item">
					<div class="customer__img"><img src="@/assets/reviews/ava.jpg" alt="photo"></div>
					<div class="customer__name"><span>Ваш отзыв</span></div>
				</li>
				<li class="customer__item">
					<div class="customer__img"><img src="@/assets/reviews/ava.jpg" alt="photo"></div>
					<div class="customer__name"><span>Ваш отзыв</span></div>
				</li>
				<li class="customer__item customer__buttom">
					<div class="customer__name"><span>оставить отзыв</span></div>
				</li>
			</ul>
		</div>
  </section>
</template>

<script>
export default {
  name: 'Testomonials',
  props: {
    msg: String
  }
}
</script>

<style scoped lang="scss">
@import '@/scss/_mixins.scss';
@import '@/scss/style.scss';
@import '~bootstrap/dist/css/bootstrap.min.css';
  .reviews{
		@include blockMain(100%, 8%);
			position: relative;
			padding: 4% 6%;
			flex-direction: column;
			justify-content: space-between;

		.reviews__substrate{
			@include substrate(90%, 90%);
		}
		.reviews__substrate>h6{
			@include substrateText(4rem, 900, 0.1);
		}
		.client{
			z-index: 9;
			display: flex;
			width: 100%;
			height: 30%;

			.client__feedback{
				width: 94%;
			}
			.client__wrapper{
				height: 100%;
				box-shadow:1px 1px 100px 1px rgba(0,0,0,0.21);
				-webkit-box-shadow:1px 1px 100px 1px rgba(0,0,0,0.21);
				-moz-box-shadow:1px 1px 100px 1px rgba(0,0,0,0.21);
			}
			.client__ava{
				width: 25%;
				height: auto;
				position: relative;
			}
			.client__img{
				position: absolute;
				width: 100%;
				height: 100%;
				top: -60px;
				box-shadow:1px 1px 100px 1px rgba(0,0,0,0.21);
				-webkit-box-shadow:1px 1px 100px 1px rgba(0,0,0,0.21);
				-moz-box-shadow:1px 1px 100px 1px rgba(0,0,0,0.21);
			}
			.client__img>img{
				width: 100%;
				height: auto;
			}
			.client__block{
				text-align: left;
				margin: auto;
				height: 100%;
				padding-left: 30%;
				width: 90%;
				display: flex;
				justify-content: space-evenly;
				flex-direction: column;
			}
		}
		.menu{
			width: 6%;
			height: 100%;

			.menu__block{
				width: 100%;
				height: 100%;
				display: flex;
				justify-content: space-between;
				flex-direction: column;
			}
			.menu__item{
				display: flex;
				width: 100%;
				height: 50%;
			}
			.menu__item>svg{
				margin: auto;
				width: 60px;
				height: 60px;
			}
		}
		.customer{
			width: 100%;
			height: 15%;
			z-index: 9;
		}
		.customer__wrapper{
			width: 100%;
			height: 100%;
			display: flex;
			justify-content: space-between;
		}
		.customer__item{
			width: 17%;
			height: 80%;
			margin: auto 0; 
			display: flex;
			cursor: pointer;
			box-shadow: 1px 1px 100px 1px rgba(0,0,0,0.21);
			-webkit-box-shadow: 1px 1px 100px 1px rgba(0,0,0,0.21);
			-moz-box-shadow: 1px 1px 100px 1px rgba(0,0,0,0.21);
		}
		.customer__img{
			width: 30%;
			height: 80%;
			margin: auto;
			border-radius: 50%;
			overflow: hidden;
		}
		.customer__img>img{
			width: 100%;
			height: auto;
		}
		.customer__name{
			margin: auto;
		}
		.customer__name>span{
			font-size: 1rem;
			font-weight: 700;
		}
		.customer__buttom{
			background-color: #2196F3;
		}
		.customer__buttom>div>span{
			font-size: 1rem;
			color: #ffffff;
			text-transform: uppercase;
		}
	}
</style>
