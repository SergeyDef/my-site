<template>
  <section class="work" id="workExperience">
  	<a name="workExperience" class="myLink"></a>
  	<div class="work__substrate">
  		<h6>Опыт работы</h6>
  	</div>
  	<div class="reviews__info info">
      <div class="info__title">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-clipboard-data info__icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				  <path fill-rule="evenodd" d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
				  <path fill-rule="evenodd" d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
				  <path d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0V9z"/>
				</svg>
        <h2>Опыт работы</h2>
      </div>
      <div class="info__text">
        <p>Опыт в веб-разработке более трёх лет. Тем не менее, ниже приведены компании, в которых я работал по другим специальностям, в других сферах.</p>
      </div>
    </div>
    <div class="work__wrapper">
    	<div class="work__company company">
    		<div class="company__wrapper">
    			<div class="company__block" id="first">
    				<div class="company__color company__color-first"><span></span></div>
    				<div class="company__picchu">
    					<div class="company__title">
    						<h5>Менеджер отдела маркетинга</h5>
    					</div>
    					<div class="company__name">
    						<h6><span>Организация:</span> ООО Консул (ТЦ Планета железяка)</h6>
    					</div>
    					<div class="company__date">
    						<span class="company__text-first"> с 01.12.2019 по 01.06.2020</span>
    					</div>
    					<div class="company__text first">
    						<p>Разработка, внедрение и контроль за соблюдением стандартов и общих принципов выкладки в торговом зале. Обучение персонала основам мерчандайзинга, контроль работы мерчандайзеров торгового центра. Работа с ТСД (перемещение, закрепление товара на местах хранения). Разработка планограмм торгового зала. Визуализация торговых помещений в 3D и 2D форматах, отрисовка пожарных планов помещения. Работа с выкладкой непосредственно в торговом зале, размещение на витринах нового ассортимента.</p>
    					</div>
    					<div class="company__info">
	    					<div class="company__site">
	    						<a href="https://www.xn--80aaasbafk1acftx0c6n.xn--p1ai/" class="company__text-first">www.планетажелезяка.рф</a>
	    					</div>
	    					<div class="company__text-show">
	    						<button 
	    						type="button" 
	    						class="first btn company__read" 
	    						v-on:click="readMore">читать полностью</button>
	    						<button 
	    						type="button" 
	    						class="first btn company__rea_hide read-none" 
	    						v-on:click="hideReadMore">скрыть</button>
	    					</div>
    					</div>
    				</div>
    			</div>
    			<div class="company__block" id="second">
    				<div class="company__color company__color-second"><span></span></div>
    				<div class="company__picchu">
    					<div class="company__title">
    						<h5>Мерчандайзер</h5>
    					</div>
    					<div class="company__name">
    						<h6><span>Организация:</span> ООО Строймаркт</h6>
    					</div>
    					<div class="company__date">
    						<span class="company__text-second"> с 01.12.2019 по 01.06.2020</span>
    					</div>
    					<div class="company__text second">
    						<p>Разработка планограмм торгового зала. Визуализация торговых помещений в 3D и 2D форматах, отрисовка пожарных планов помещения. Разработка, заказ и размещение торгового оборудования и POS материалов на торговых точках. Работа с выкладкой непосредственно в торговом зале, размещение на витринах нового ассортимента. Контроль за проведением акций. Разработка, внедрение и контроль за соблюдением стандартов и общих принципов выкладки в торговом зале. Зонирование торгового зала по номенклатурным группам. Расчёт площади, занимаемой номенклатурными группами и товарными категориями в торговом зале.</p>
    					</div>
    					<div class="company__info">
	    					<div class="company__site">
	    						<a href="https://stroymarkt.ru/" class="company__text-second">stroymarkt.ru</a>
	    					</div>
	    					<div class="company__text-show">
	    						<button 
	    						type="button" 
	    						class="second btn company__read" 
	    						v-on:click="readMore">читать полностью</button>
	    						<button 
	    						type="button" 
	    						class="second btn company__rea_hide read-none" 
	    						v-on:click="hideReadMore">скрыть</button>
	    					</div>
    					</div>
    				</div>
    			</div>
    			<div class="company__block" id="third">
    				<div class="company__color company__color-third"><span></span></div>
    				<div class="company__picchu">
    					<div class="company__title">
    						<h5>Менеджер отдела продаж</h5>
    					</div>
    					<div class="company__name">
    						<h6><span>Организация:</span> ООО ТД Лабораторное оснащение</h6>
    					</div>
    					<div class="company__date">
    						<span class="company__text-third"> с с 01.07.2014 по 01.12.2014</span>
    					</div>
    					<div class="company__text third">
    						<p>Приём входящих звонков, работа с аукционной документацией, электронными площадками: Росэлторг, Сбербанк-АСТ, ЭТП Сбербанк-АСТ. Составление и проверка готовящихся к подписанию договоров. Отслеживание на zakupki.gov и учет предстоящих аукционов и котировочных заявок. Составление коммерческих предложений, информационных писем и т. д.</p>
    					</div>
    					<div class="company__info">
	    					<div class="company__site">
	    						<a href="https://www.moslabo.ru/about/" class="company__text-third">www.moslabo.ru</a>
	    					</div>
	    					<div class="company__text-show">
	    						<button 
	    						type="button" 
	    						class="third btn company__read" 
	    						v-on:click="readMore">читать полностью</button>
	    						<button 
	    						type="button" 
	    						class="third btn company__rea_hide read-none" 
	    						v-on:click="hideReadMore">скрыть</button>
	    					</div>
    					</div>
    				</div>
    			</div>
    			<div class="company__block" id="fourth">
    				<div class="company__color company__color-fourth"><span></span></div>
    				<div class="company__picchu">
    					<div class="company__title">
    						<h5>Специалист по учету товара</h5>
    					</div>
    					<div class="company__name">
    						<h6><span>Организация:</span> ООО Вайлдберриз</h6>
    					</div>
    					<div class="company__date">
    						<span class="company__text-fourth">с 07.05.2013 по 14.05.2014</span>
    					</div>
    					<div class="company__text fourth">
    						<p>Учёт и подготовка к отгрузке неликвида, "обезличенного" товара (товара, не принятого по причине несоответствия штрихкода, либо арти́кула со складской базой данных), товара, пришедшего на склад с производственным браком, проведение перемещений, возвратов в базе 1С, подготовка отгрузочных документов, встреча представителей поставщиков и отгрузка товара.</p>
    					</div>
    					<div class="company__info">
	    					<div class="company__site">
	    						<a href="https://www.wildberries.ru/" class="company__text-fourth">www.wildberries.ru</a>
	    					</div>
	    					<div class="company__text-show">
	    						<button 
	    						type="button" 
	    						class="fourth btn company__read" 
	    						v-on:click="readMore">читать полностью</button>
	    						<button 
	    						type="button" 
	    						class="fourth btn company__rea_hide read-none" 
	    						v-on:click="hideReadMore">скрыть</button>
	    					</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    	<div class="work__progres progres">
    		<div class="progres__heade">
    			<div class="progres__heading">
	    			<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-star" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
						  <path fill-rule="evenodd" d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.523-3.356c.329-.314.158-.888-.283-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767l-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288l1.847-3.658 1.846 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.564.564 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
						</svg>
    				<h5>Веб-разработка</h5>
    			</div>
    		</div>
    		<div class="progres__block progres__block-activ">
    			<div class="progres__substrate">
    				<h6>01</h6>
    			</div>
    			<div class="progres__title"><span>Проект под ключ</span></div>
    			<div class="progres__text">
    				<span>Разработка сайта с нуля от идеи до полноценного интернет ресурса</span>
    			</div>
    		</div>
    		<div class="progres__block">
    			<div class="progres__substrate">
    				<h6>02</h6>
    			</div>
    			<div class="progres__title"><span>Работа в команде</span></div>
    			<div class="progres__text">
    				<p>Опыт работы в небольших группах или в паре с истользованием системы контроля версии Git</p>
    			</div>
    		</div>
    		<div class="progres__block">
    			<div class="progres__substrate">
    				<h6>03</h6>
    			</div>
    			<div class="progres__title"><span>Доработка чужих проектов</span></div>
    			<div class="progres__text">
	    			<p>Опыт работы с чужим кодом. Внесение изменений или улучшений в готовые или недоработанные проекты</p>
					</div>
    		</div>
    	</div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'WorkSection',
  props: {
    msg: String
  },
  data(){
  	return {
  	}
  },
  methods: {
  	readMore: function () {
  		let key = event.target;
  		let keyClassArray = key.className.split(' ');
  		let block = document.querySelectorAll('.company__block');
  		let text = document.querySelectorAll('.company__text');
  		let read = document.querySelectorAll('.company__read');
  		let hideRead = document.querySelectorAll('.company__rea_hide');

  		for (var i = 0; i < hideRead.length; i++) {
  			hideRead[i].classList.add('read-none');
  		}

  		key.nextElementSibling.classList.remove('read-none');

  		for (var i = 0; i < read.length; i++) {
  			read[i].classList.remove('read-none');
  		}

  		key.classList.add('read-none');
  		for (var i = 0; i < block.length; i++) {
  			if (block[i].matches('.company__block-activ')) {
  				block[i].classList.remove('company__block-activ');
  			}
  			if (key.classList.contains(block[i].getAttribute('id'))) {
  				block[i].classList.add('company__block-activ');
  			}
  		}

  		// console.log(keyClassArray.forEach(elem => console.log(`.${elem}`)));

  		for (var i = 0; i < text.length; i++) {
  			// debugger;
  			// console.log(text[i].classList.contains(keyClassArray[1]));
  			//console.log(keyClassArray.forEach(elem => text[i].classList.contains(elem)));
  			if (text[i].classList.contains(keyClassArray[0])) {
  		 		text[i].classList.add('company__text-activ');
  		 	}
  		}	
  	},
  	hideReadMore: function (){
  		let key = event.target;
  		let keyClassArray = key.className.split(' ');
  		let block = document.querySelectorAll('.company__block');
  		let read = document.querySelectorAll('.company__read');
  		let text = document.querySelectorAll('.company__text');

  		key.classList.add('read-none');

  		for (var i = 0; i < block.length; i++) {
  			if (key.classList.contains(block[i].getAttribute('id'))) {
  				block[i].classList.remove('company__block-activ');
  			}
  		}

  		for (var i = 0; i < text.length; i++) {
  			if (text[i].classList.contains(keyClassArray[0])) {
  				text[i].classList.remove('company__text-activ');
  			}
  		}

  		key.previousElementSibling.classList.remove('read-none');
  	},
  }
}
</script>

<style scoped lang="scss">
@import '@/scss/_mixins.scss';
@import '@/scss/style.scss';
@import '~bootstrap/dist/css/bootstrap.min.css';
  .work{
		@include blockMain(100%, 11%);
			position: relative;
			padding: 4% 6%;
			flex-direction: column;
      justify-content: space-between;

		.work__substrate{
			@include substrate(90%, 90%);
		}
		.work__substrate>h6{
			@include substrateText(4rem, 900, 0.1);
		}
		.work__wrapper{
			display: flex;
			justify-content: space-between;
			height: 80%;
			z-index: 9;
			::-webkit-scrollbar { 
				width: 5px; 
				height: 2px;
			}
			::-webkit-scrollbar-button {  
				background-color: #ffffff; 
			}
			::-webkit-scrollbar-track {  
				background-color: #2493EF;
			}
			::-webkit-scrollbar-track-piece { 
				background-color: #ffffff;
			}
			::-webkit-scrollbar-thumb { 
				height: 20px; 
				background-color: #2493EF; 
				border-radius: 5px;
			}
			::-webkit-scrollbar-corner { 
				background-color: #2493EF;
			}
			::-webkit-resizer { 
				background-color: #2493EF;
			}
		}
		.work__company{
			width: 66%;
			height: 100%;
			overflow: auto;
			box-shadow:1px 1px 100px 1px rgba(0,0,0,0.21);
			-webkit-box-shadow:1px 1px 100px 1px rgba(0,0,0,0.21);
			-moz-box-shadow:1px 1px 100px 1px rgba(0,0,0,0.21);
		}
		.company{
			padding-left: 5%;
			padding-top: 5%;
			z-index: 2;

			.company__wrapper{
				position: relative;
				height: 100%;
			}
			.company__block{
				position: relative;
				text-align: left;
				padding-left: 7%;
				width: 100%;
				height: 40%;
				border-left: 2px solid #F0F0F0;
			}
			.company__block-activ{
				height: 60%;
			}
			.company__text-activ{
				display: flex;
				height: 60%!important;
			}
			.company__text-activ>p{
				margin: auto 0;
			}
			.company__title{
				@include headingMinBlock(100%, 10%);
			}
			.company__title>h5{
				@include headingMin(1.2rem, 700);
			}
			.company__name{
				width: 100%;
				height: 5%;
			}
			.company__name>h6{
				color: #797979;
				font-size: 0.776rem;
			}
			.company__name>h6>span{
				color: #000;
				font-weight: 800;
				text-transform: uppercase;
			}
			.company__date{
				width: 100%;
				height: 10%;
			}
			.company__picchu{
				display: flex;
    		flex-direction: column;
    		justify-content: space-between;
				position: relative;
				height: 100%;
			}
			.company__color{
				border-radius: 50%;
				width: 40px;
				height: 40px;
				left: -3%;
				z-index: 999999;
				display: flex;
				position: absolute;
			}
			.company__color>span{
				width: 20px;
				height: 20px;
				margin: auto;
				border-radius: 50%;
			}
			.company__color-first{
				border: 5px solid #2196F3;
			}
			.company__color-first>span{
				background-color: #2196F3;
			}
			.company__text{
				width: 90%;
				height: 30%;
				overflow: hidden;
			}
			.company__text-active{
			}
			.company__info{
				width: 100%;
				height: 20%;
				display: flex;
			}
			.company__site{
				display: flex;
				width: 50%;
				height: 100%;
			}
			.company__site>a{
				margin: auto 0;
			}
			.company__text-show{
				width: 50%;
				height: 100%;
			}
			.company__text-show>button{
				width: 50%;
				height: 86%;
				color: #26A59E;
				font-size: 0.894rem;
				margin-left: 30%;
				text-decoration: none;
			}
			.read-none{
				display: none;
			}
			.company__text-first{
				color: #2196F3;
			}
			.company__color-second{
				border: 5px solid #26A59E;
			}
			.company__color-second>span{
				background-color: #26A59E;
			}
			.company__text-second{
				color: #26A59E;
			}
			.company__color-third{
				border: 5px solid #F05251;
			}
			.company__color-third>span{
				background-color: #F05251;
			}
			.company__text-third{
				color: #F05251;
			}
			.company__color-fourth{
				border: 5px solid #FAC02E;
			}
			.company__color-fourth>span{
				background-color: #FAC02E;
			}
			.company__text-fourth{
				color: #FAC02E;
			}
		}
		.work__progres{
			width: 32%;
			height: 100%;
			background-color: #F6F6F6;
			display: flex;
			flex-direction: column;
			justify-content: space-between;
			box-shadow: 1px 1px 100px 1px rgba(0,0,0,0.21);
			-webkit-box-shadow: 1px 1px 100px 1px rgba(0,0,0,0.21);
			-moz-box-shadow: 1px 1px 100px 1px rgba(0,0,0,0.21);
		}
		.progres{

			.progres__heade{
				width: 100%;
				height: 20%;
				display: flex;
				background-color: #ffffff;
				flex-direction: column;
				justify-content: space-between;
			}
			.progres__heading{
				display: flex;
				margin: auto;
			}
			.progres__heading>svg{
				width: 50px;
				height: 50px;
				padding: 10px;
				margin: auto;
				color: #FCC02E;
			}
			.progres__heading>h5{
				@include headingMin(1rem, 700);
				margin: auto;
			}
			.progres__block{
				width: 100%;
				height: 26%;
				display: flex;
				padding: 10%;
				position: relative;
				flex-direction: column;
				justify-content: space-evenly;
				background-color: #ffffff;
			}
			.progres__substrate{
				@include substrate(90%, 90%);
			}
			.progres__substrate>h6{
				@include substrateText(4rem, 800, 0.2);
			}
			.progres__title{
				@include headingMin(1rem, 700);
			}
			.progres__text{
				width: 100%;
				height: 40%;
				text-align: left;
			}
			.progres__text>p{
				width: 100%;
				height: 100%;
			}
		}
	}
	@media (max-width: 1360px){
		.work{

			.work__substrate{

			}
			.work__substrate>h6{

			}
			.work__wrapper{
			}
			.work__company{
			}
			.company{

				.company__wrapper{
					
				}
				.company__block{
					
				}
				.company__block-activ{
					height: 75%;
				}
				.company__title{
					
				}
				.company__title>h5{
					
				}
				.company__name{
					
				}
				.company__name>h6{
					
				}
				.company__name>h6>span{
					
				}
				.company__date{
					
				}
				.company__picchu{
					
				}
				.company__color{
					
				}
				.company__color>span{
					
				}
				.company__color-first{
					
				}
				.company__color-first>span{
					
				}
				.company__text{
					
				}
				.company__info{
					
				}
				.company__site{
					
				}
				.company__text-show{
					
				}
				.company__text-show>button{
					width: 60%;
				}
				.company__text-first{
					
				}
				.company__color-second{

				}
				.company__color-second>span{

				}
				.company__text-second{

				}
				.company__color-third{

				}
				.company__color-third>span{

				}
				.company__text-third{

				}
				.company__color-fourth{

				}
				.company__color-fourth>span{

				}
				.company__text-fourth{
				}
			}
			.work__progres{
			}
			.progres{

				.progres__heade{
				}
				.progres__heading{
				}
				.progres__heading>svg{
				}
				.progres__heading>h5{
				
				}
				.progres__block{
				}
				.progres__substrate{
				}
				.progres__substrate>h6{
					
				}
				.progres__title{

				}
				.progres__text{

				}
				.progres__text>p{

				}
			}
		}
	}
	@media (max-width: 1140px){
		.work{

			.work__substrate{

			}
			.work__substrate>h6{

			}
			.work__wrapper{
				flex-direction: column;
			}
			.work__company{
				width: 100%;
				height: 69%;
			}
			.company{

				.company__wrapper{
					
				}
				.company__block{
					
				}
				.company__title{
					
				}
				.company__title>h5{
					
				}
				.company__name{
					
				}
				.company__name>h6{
					
				}
				.company__name>h6>span{
					
				}
				.company__date{
					
				}
				.company__picchu{
					
				}
				.company__color{
					
				}
				.company__color>span{
					
				}
				.company__color-first{
					
				}
				.company__color-first>span{
					
				}
				.company__text{
					
				}
				.company__info{
					
				}
				.company__site{
					
				}
				.company__text-show{
					
				}
				.company__text-show>button{
					
				}
				.company__text-first{
					
				}
				.company__color-second{

				}
				.company__color-second>span{

				}
				.company__text-second{

				}
				.company__color-third{

				}
				.company__color-third>span{

				}
				.company__text-third{

				}
				.company__color-fourth{

				}
				.company__color-fourth>span{

				}
				.company__text-fourth{
				}
			}
			.work__progres{
				width: 100%;
				height: 26%;
				flex-direction: row;
			}
			.progres{

				.progres__heade{
					width: 18%;
					height: 100%;
				}
				.progres__heading{
					width: 100%;
					height: 60%;
					flex-direction: column;
				}
				.progres__heading>svg{
					width: 60%;
					height: 80%;
				}
				.progres__heading>h5{
				
				}
				.progres__block{
					padding: 0;
					width: 25%;
					height: 100%;
				}
				.progres__substrate{
					width: 100%;
					height: 100%;
				}
				.progres__substrate>h6{
					
				}
				.progres__title{

				}
				.progres__text{

				}
				.progres__text>p{

				}
			}
		}
	}
	@media (max-width: 967px){
		.work{
			height: 16%;

			.reviews__info{
				height: 10%;
			}
			.work__substrate{

			}
			.work__substrate>h6{

			}
			.work__wrapper{
				height: 90%;
			}
			.work__company{
				height: 55%;
			}
			.company{

				.company__wrapper{
					
				}
				.company__block{
					
				}
				.company__block-activ{
					height: 60%;
				}
				.company__title{
					
				}
				.company__title>h5{
					
				}
				.company__name{
					
				}
				.company__name>h6{
					
				}
				.company__name>h6>span{
					
				}
				.company__date{
					
				}
				.company__picchu{
					
				}
				.company__color{
					
				}
				.company__color>span{
					
				}
				.company__color-first{
					
				}
				.company__color-first>span{
					
				}
				.company__text{
					
				}
				.company__text>p{
					font-size: 0.86rem;
				}
				.company__text-activ{
					height: 50%!important;
				}
				.company__info{
					
				}
				.company__site{
					
				}
				.company__text-show{
					
				}
				.company__text-show>button{
					
				}
				.company__text-first{
					
				}
				.company__color-second{

				}
				.company__color-second>span{

				}
				.company__text-second{

				}
				.company__color-third{

				}
				.company__color-third>span{

				}
				.company__text-third{

				}
				.company__color-fourth{

				}
				.company__color-fourth>span{

				}
				.company__text-fourth{
				}
			}
			.work__progres{
				height: 40%;
				flex-direction: column;
			}
			.progres{

				.progres__heade{
					width: 90%;
					height: 18%;
					margin: 0 auto;
				}
				.progres__heading{
					height: 80%;
				}
				.progres__heading>svg{
				}
				.progres__heading>h5{
				
				}
				.progres__block{
					width: 90%;
					height: 26%;
					margin: 0 auto;
					padding: 3%;
				}
				.progres__substrate{
				}
				.progres__substrate>h6{
					
				}
				.progres__title{

				}
				.progres__text{

				}
				.progres__text>p{

				}
			}
		}
	}
	@media (max-width: 667px){
		.work{
			height: 11%;

			.reviews__info{
				height: 20%;
			}
			.work__substrate{

			}
			.work__substrate>h6{
				font-size: 1.5rem;
			}
			.work__wrapper{
				height: 80%;
			}
			.work__company{
				height: 69%;
			}
			.company{

				.company__wrapper{
						
				}
				.company__block{
				}
				.company__block-activ{
					height: 90%;
				}
				.company__title{
					height: 12%;
					display: flex;
					text-align: center;
				}
				.company__title>h5{
					font-size: 1rem;
					padding: 0;
					margin: auto;
				}
				.company__name{
						
				}
				.company__name>h6{
						
				}
				.company__name>h6>span{
						
				}
				.company__date{
						
				}
				.company__picchu{
						
				}
				.company__color{
					left: -6%;
				}
				.company__color>span{
						
				}
				.company__color-first{
						
				}
				.company__color-first>span{
						
				}
				.company__text{
						
				}
				.company__text>p{
				}
				.company__text-activ{
					height: 65%!important;
				}
				.company__info{
						
				}
				.company__site{
						
				}
				.company__site>a{
					font-size: 0.734rem;
				}
				.company__text-show{
						
				}
				.company__text-show>button{
					width: 80%;
					margin-left: 0;
					font-size: 0.734rem;
				}
				.company__text-first{
						
				}
				.company__color-second{

				}
				.company__color-second>span{

				}
				.company__text-second{

				}
				.company__color-third{

				}
				.company__color-third>span{

				}
				.company__text-third{

				}
				.company__color-fourth{

				}
				.company__color-fourth>span{

				}
				.company__text-fourth{
				}
			}
			.work__progres{
				flex-direction: column;
				height: 26%;
			}
			.progres{

				.progres__heade{
					width: 100%;
					height: 19%;
					margin: 0;
				}
				.progres__heading{
					flex-direction: row;
					justify-content: center;
					height: 100%;
				}
				.progres__heading>svg{
					width: 10%;
					height: 100%;
					margin: auto 0;
				}
				.progres__heading>h5{
					margin: auto 0;
				}
				.progres__block{
					width: 100%;
					height: 79%;
					padding: 0 0 0 5%;
					display: none;
					margin: 0;
				}
				.progres__block-activ{
					display: flex;
				}
				.progres__substrate{
				}
				.progres__substrate>h6{
						
				}
				.progres__title{

				}
				.progres__text{

				}
				.progres__text>p{

				}
			}
		}
	}
	@media (max-width: 540px){
		.work{
			height: 11%;

			.reviews__info{
				height: 20%;
			}
			.work__substrate{

			}
			.work__substrate>h6{
				font-size: 1.5rem;
			}
			.work__wrapper{
				height: 80%;
			}
			.work__company{
				height: 69%;
			}
			.company{

				.company__wrapper{
						
				}
				.company__block{
				}
				.company__block-activ{
				}
				.company__title{
				}
				.company__title>h5{
				}
				.company__name{
					height: 10%;	
				}
				.company__name>h6{
					font-size: 0.7rem;
				}
				.company__name>h6>span{
						
				}
				.company__date>span{
					font-size: 0.734rem;
				}
				.company__picchu{
						
				}
				.company__color{
				}
				.company__color>span{
						
				}
				.company__color-first{
						
				}
				.company__color-first>span{
						
				}
				.company__text{
						
				}
				.company__text>p{
					font-size: 0.768rem;
				}
				.company__text-activ{
				}
				.company__info{
						
				}
				.company__site{
						
				}
				.company__site>a{
				}
				.company__text-show{
						
				}
				.company__text-show>button{
				}
				.company__text-first{
						
				}
				.company__color-second{

				}
				.company__color-second>span{

				}
				.company__text-second{

				}
				.company__color-third{

				}
				.company__color-third>span{

				}
				.company__text-third{

				}
				.company__color-fourth{

				}
				.company__color-fourth>span{

				}
				.company__text-fourth{
				}
			}
			.work__progres{
			}
			.progres{

				.progres__heade{
				}
				.progres__heading{
				}
				.progres__heading>svg{
				}
				.progres__heading>h5{
				}
				.progres__block{
				}
				.progres__block-activ{
				}
				.progres__substrate{
				}
				.progres__substrate>h6{
						
				}
				.progres__title{

				}
				.progres__text{

				}
				.progres__text>p{

				}
			}
		}
	}
	@media (max-width: 440px){
		.work{

			.reviews__info{
			}
			.work__substrate{

			}
			.work__substrate>h6{
			}
			.work__wrapper{
			}
			.work__company{
			}
			.company{

				.company__wrapper{
						
				}
				.company__block{
					height: 45%;
				}
				.company__block-activ{
					height: 110%;
				}
				.company__title{
				}
				.company__title>h5{
					font-size: 0.8rem;
				}
				.company__name{
				}
				.company__name>h6{
				}
				.company__name>h6>span{
						
				}
				.company__date>span{
				}
				.company__picchu{
						
				}
				.company__color{
					width: 30px;
					height: 30px;
				}
				.company__color>span{
					width: 13px;
					height: 13px;
				}
				.company__color-first{
						
				}
				.company__color-first>span{
						
				}
				.company__text{
						
				}
				.company__text>p{
				}
				.company__text-activ{
				}
				.company__info{
					flex-direction: column;
				}
				.company__site{
						order: 0;
				}
				.company__site>a{
				}
				.company__text-show{
					order: -1;
					width: 100%;
				}
				.company__text-show>button{
				}
				.company__text-first{
						
				}
				.company__color-second{

				}
				.company__color-second>span{

				}
				.company__text-second{

				}
				.company__color-third{

				}
				.company__color-third>span{

				}
				.company__text-third{

				}
				.company__color-fourth{

				}
				.company__color-fourth>span{

				}
				.company__text-fourth{
				}
			}
			.work__progres{
			}
			.progres{

				.progres__heade{
				}
				.progres__heading{
				}
				.progres__heading>svg{
				}
				.progres__heading>h5{
				}
				.progres__block{
				}
				.progres__block-activ{
				}
				.progres__substrate{
				}
				.progres__substrate>h6{
						
				}
				.progres__title{

				}
				.progres__text{

				}
				.progres__text>p{

				}
			}
		}
	}
</style>
