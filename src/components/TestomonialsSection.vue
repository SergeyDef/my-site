<template>
  <section class="reviews" id="reviews">
  	<a name="reviews" class="myLink"></a>
  	<div class="reviews__substrate">
  		<h6>Отзывы</h6>
  	</div>
  	<div class="reviews__info info">
      <div class="info__title">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-people info__icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
		  <path fill-rule="evenodd" d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1h8zm-7.995-.944v-.002.002zM7.022 13h7.956a.274.274 0 0 0 .014-.002l.008-.002c-.002-.264-.167-1.03-.76-1.72C13.688 10.629 12.718 10 11 10c-1.717 0-2.687.63-3.24 1.276-.593.69-.759 1.457-.76 1.72a1.05 1.05 0 0 0 .022.004zm7.973.056v-.002.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0zM6.936 9.28a5.88 5.88 0 0 0-1.23-.247A7.35 7.35 0 0 0 5 9c-4 0-5 3-5 4 0 .667.333 1 1 1h4.216A2.238 2.238 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816zM4.92 10c-1.668.02-2.615.64-3.16 1.276C1.163 11.97 1 12.739 1 13h3c0-1.045.323-2.086.92-3zM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4z"/>
		</svg>
        <h2>Отзывы</h2>
      </div>
      <div class="info__text">
        <p>В данном разделе можно прочитать отзывы о моей работе. Также вы можете отправить свой отзыв.</p>
      </div>
    </div>
    <div class="reviews__client client">
    	<div class="tab-content client__feedback" id="nav-tabContent">
				<div class="tab-pane fade show active client__wrapper" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
					<div class="client__ava">
						<div class="client__img">
							<img :src="responseOne.photo" alt="photo">
						</div>
					</div>
					<div class="client__block">
						<div class="client__title">
							<h5>{{ responseOne.name + " " + responseOne.lestName }}</h5>
						</div>
						<div class="client__text">
							<p>{{ responseOne.text }}</p>
						</div>
						<div class="client__link">
							<a v-bind:href="responseOne.linkWork">{{responseOne.linkWork}}</a>
						</div>
						<div class="client__bate">
							<span>{{ responseOne.bate }}</span>
						</div>
					</div>
				</div>
				<div class="tab-pane fade client__wrapper" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
					<div class="client__ava">
						<div class="client__img">
							<img :src="responseTwo.photo" alt="photo">
						</div>
					</div>
					<div class="client__block">
						<div class="client__title">
							<h5>{{ responseTwo.name + " " + responseTwo.lestName }}</h5>
						</div>
						<div class="client__text">
							<p>{{responseTwo.text}}</p>
						</div>
						<div class="client__link">
							<a v-bind:href="responseTwo.linkWork">{{responseTwo.linkWork}}</a>
						</div>
						<div class="client__bate">
							<span>{{responseTwo.bate}}</span>
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
				<li 
				v-for="respons in responseAll"
				class="customer__item">
					<div class="customer__img"><img :src="respons.photo" alt="photo"></div>
					<div class="customer__name"><span>{{ respons.name }}</span></div>
					<div @click="toSwitch" v-bind:id="respons.id" class="customer__switch"></div>
				</li>
			</ul>
			<div class="customer__send">
				<button type="button" class="customer__buttom" @click="showWindow">
					<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
					  <path fill-rule="evenodd" d="M11.293 1.293a1 1 0 0 1 1.414 0l2 2a1 1 0 0 1 0 1.414l-9 9a1 1 0 0 1-.39.242l-3 1a1 1 0 0 1-1.266-1.265l1-3a1 1 0 0 1 .242-.391l9-9zM12 2l2 2-9 9-3 1 1-3 9-9z"/>
					  <path fill-rule="evenodd" d="M12.146 6.354l-2.5-2.5.708-.708 2.5 2.5-.707.708zM3 10v.5a.5.5 0 0 0 .5.5H4v.5a.5.5 0 0 0 .5.5H5v.5a.5.5 0 0 0 .5.5H6v-1.5a.5.5 0 0 0-.5-.5H5v-.5a.5.5 0 0 0-.5-.5H3z"/>
				</svg>
				Оставить отзыв</button>
			</div>
		</div>
  </section>
</template>

<script>
export default {
  name: 'Testomonials',
  props: {
    msg: String
  },
  data(){
  	return{
  		response: [
  		{id: 1, name: "Александр", lestName: "Котов", text: "Быстро. Качественно. Надёжно. Рекомендую!", photo: "/img/1.34cee12f.jpg", bate: "01/11/2020", linkWork: "http://localhost:8080/" },
  		{id: 2, name: "Елена", lestName: "Кровцова", text: "Всё понравилось. Сайт работает.", photo: "/img/2.8dd30982.jpg", bate: "03/12/2020", linkWork: "http://localhost:8080/" },
  		{id: 3, name: "Ваш отзыв", lestName: "", text: "Отзыв пока не написан, ноесли я делал вам сайт исправте это!", photo: "/img/ava.fc5f0d09.jpg", bate: "", linkWork: "" },
  		{id: 4, name: "Ваш отзыв", lestName: "", text: "Отзыв пока не написан, ноесли я делал вам сайт исправте это!", photo: "/img/ava.fc5f0d09.jpg", bate: "", linkWork: "" },
  		{id: 5, name: "Ваш отзыв", lestName: "", text: "Отзыв пока не написан, ноесли я делал вам сайт исправте это!", photo: "./img/ava.fc5f0d09.jpg", bate: "", linkWork: "" },
  		{id: 6, name: "Ваш отзыв", lestName: "", text: "Отзыв пока не написан, ноесли я делал вам сайт исправте это!", photo: "/img/ava.fc5f0d09.jpg", bate: "", linkWork: "" },
  		],
  		responseOne: "",
  		responseTwo: "",
  		responseAll: "",
  	}
  },
  methods: {
  	showWindow: function (){
  		this.$emit('showWindowFeedback');
  	},
  	toSwitch: function (){
  		let respons = this.responseAll;
  		let selectedId = event.target.getAttribute('id');
  		let navHome = document.querySelector('#nav-home');
  		let one = this.responseOne;
  		let two = this.responseTwo;
  		
  		if (navHome.classList.contains('show')) {
  			this.responseOne = respons.filter(item => item.id == selectedId)[0];
  			respons = respons.filter(item => item.id != selectedId);
  			respons.push(one);
  			this.responseAll = respons;
  		} else {
  			this.responseTwo = respons.filter(item => item.id == selectedId)[0];
  			respons = respons.filter(item => item.id != selectedId);
  			respons.push(two);
  			this.responseAll = respons;
  		}

  	}
  },
  mounted(){
  	let response = this.response;
  	let one = response.filter(item => item.id === 1);
  	let to = response.filter(item => item.id === 2); 
  	let all = response.filter(item => item.id !=1 && item.id !=2 );

  	this.responseTwo = to[0];
  	this.responseOne = one[0];
  	this.responseAll = all;
  	console.log(responseOne);
  },
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
				width: 18%;
				height: auto;
				position: relative;
			}
			.client__img{
				position: absolute;
				width: 100%;
				height: 100%;
				top: -15px;
				box-shadow:1px 1px 100px 1px rgba(0,0,0,0.21);
				-webkit-box-shadow:1px 1px 100px 1px rgba(0,0,0,0.21);
				-moz-box-shadow:1px 1px 100px 1px rgba(0,0,0,0.21);
			}
			.client__img>img{
				width: 100%;
				height: auto;
			}
			.client__block{
				position: relative;
				text-align: left;
				margin: auto;
				height: 100%;
				padding: 0 2% 0 15%;
				width: 90%;
				display: flex;
				justify-content: space-evenly;
				flex-direction: column;
			}
			.client__bate{
				width: 15%;
				height: 100%;
				position: absolute;
				display: flex;
				right: 0;
			}
			.client__bate>span{
				display: block;
				margin: auto;
				color: #26A59E;
				font-size: 1rem;
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
			display: flex;
			z-index: 9;

			.customer__wrapper{
				width: 80%;
				height: 100%;
				display: flex;
				justify-content: space-between;
			}
			.customer__item{
				z-index: 9999;
				width: 22%;
				height: 80%;
				margin: auto 0; 
				display: flex;
				cursor: pointer;
				position: relative;
				box-shadow: 1px 1px 100px 1px rgba(0,0,0,0.21);
				-webkit-box-shadow: 1px 1px 100px 1px rgba(0,0,0,0.21);
				-moz-box-shadow: 1px 1px 100px 1px rgba(0,0,0,0.21);
			}
			.customer__switch{
				width: 100%;
				height: 100%;
				z-index: 99;
				position: absolute;
			}
			.customer__img{
				z-index: -1;
				width: 30%;
				height: 80%;
				margin: auto;
				border-radius: 50%;
				overflow: hidden;
			}
			.customer__img>img{
				z-index: -1;
				width: 100%;
				height: auto;
			}
			.customer__name{
				z-index: -1;
				margin: auto;
			}
			.customer__name>span{
				z-index: -1;
				font-size: 1rem;
				font-weight: 700;
			}
			.customer__send{
				margin: auto 2%;
				width: 16%;
				height: 60%;
			}
			.customer__buttom{
				@include buttonMain(100%, 100%, 1rem);
			}
			.customer__buttom:focus{
				border-radius: 0;
			}
		}
	}
	@media (max-width: 1140px){
		.reviews{
			height: 9%;
			.reviews__substrate{
			}
			.reviews__substrate>h6{
			}
			.client{

				.client__feedback{
				}
				.client__wrapper{
				}
				.client__ava{
					width: 24%;
				}
				.client__img{
				}
				.client__img>img{
				}
				.client__block{
					width: 70%;
				}
			}
			.menu{

				.menu__block{
				}
				.menu__item{
					padding: 0;
				}
				.menu__item>svg{
					width: 50px;
					height: 50px;
				}
			}
			.customer{
				height: 40%;
			}
			.customer__wrapper{
			}
			.customer__item{
				width: 30%;
    		height: 30%;
			}
			.customer__img{
			}
			.customer__img>img{
			}
			.customer__name{
			}
			.customer__name>span{
			}
			.customer__buttom{
			}
			.customer__buttom:focus{
			}
		}
	}
	@media (max-width: 667px){
		.reviews{
			height: 11.5%;
			.reviews__substrate{
			}
			.reviews__substrate>h6{
				font-size: 1.5rem;
			}
			.client{
				height: 60%;
				flex-direction: column;

				.client__feedback{
					order: 0;
					width: 100%;
					height: 90%;
				}
				.client__wrapper{
				}
				.client__ava{
					float: right;
					width: 45%;
				}
				.client__img{
					position: static;
				}
				.client__img>img{
				}
				.client__block{
					padding: 0;
					height: 60%;
				}
			}
			.menu{
				order: -1;
				width: 100%;
				height: 10%;

				.menu__block{
					flex-direction: row;
				}
				.menu__item{
					width: 50%;
					height: 100%;
				}
				.menu__item>svg{
					width: 30px;
					height: 30px;
				}
			}
			.customer{
				height: 25%;
			}
			.customer__wrapper{
				flex-direction: column;
			}
			.customer__item{
				width: 90%;
				height: 20%;
				margin: 0 auto;
			}
			.customer__img{
				width: 40px;
				height: 40px;
			}
			.customer__img>img{
			}
			.customer__name{
			}
			.customer__name>span{
			}
			.customer__buttom{
			}
			.customer__buttom:focus{
			}
		}
	}
</style>
