<template>
	<div class="wrapper">
		<LateralFace class="lateral" id="lateral" />
    <ButtonLateralFace />
	  <div class="article" v-for="art in article">
	  	<MenuHeader class="menuHeader" :menuHeaderLists="menuHeaderLists" />
	  	<div class="article__wrapper">
	  		<div class="article__title"><h1>{{ art.title }}</h1></div>
	  		<div class="article__content">
		  		<div class="article__img">
		  			<img src="" alt="">
		  		</div>
		  		<div class="article__text" v-html="art.text"></div>
	  		</div>
	  	</div>
	  	<div class="article__comments comments">
	  		<form class="comments__form">
	  			<div class="comments__textarea">
	  				<textarea></textarea>
	  			</div>
	  			<div class="comments__button">
	  				<button>Оставить комментарий</button>
	  			</div>
	  		</form>
	  			<div class="comment">
	  				<div class="comment__block">
	  					<div lass="comment__date"><span></span></div>
	  					<div class="comment__text"><p></p></div>
	  				</div>
	  				<div class="comment__ava"><img src="" alt=""></div>
	  			</div>
	  			</div>
	  		</div>
	  	</div>
	  </div>
  </div>
</template>

<script>
	import LateralFace from '@/components/LateralFace.vue'
	import ButtonLateralFace from '@/components/ButtonLateralFace.vue'
	import MenuHeader from '@/components/MenuHeader.vue'

	export default{
		name: 'article',
		components: {
			LateralFace,
			ButtonLateralFace,
			MenuHeader,
		},
		data(){
			return{
				articles: [
					{ id: 1, 
						title: 'Векторная графика в веб разработке',
						text: '<div><p>Для размещения изображений на интернет ресурсах, возможно использовать как растровые так и векторные изображения. Оба типа картинок имеют так сказать свою сферу применения и активно используются при создании сайта или приложения.</p><p>Растровое изображение строятся на основе пикселей - наименьших логических двумерных элементов. Проще говоря микроскопических квадратах, каждый из них имеет свой цвет. Чем больше квадратов в изображении, тем выше его качество и соответстве больше програмной памяти оно занимает. Представленны пиксильные изображения как правило в форматах JPEG или PNG. Есть и другие форматы пиксельных изображений но рассматривать мы их не будем.</p><p>Основными минусами растровой графики являются потеря качества изображения при маштабирование и большой "вес" файлов. Поэтому использование на веб страници рационально ограничеть контентными изображениями (фотто пользователей, рекламные банеры и т. п.). Во всех остальных случаях, где это возможно лучше использовать векторно графические изображения представленные в формате svg.</p><p>SVG (от англ. Scalable Vector Graphics) - маштабируемая векторная графика. Представляют из себя файл формата ".svg" и содержат разметку xml и встроенные css стили.</p> <div><h6>Чем хороши векторные изображения:</h6></div><div><ul><li>Поддерживается всеми браузерами.</li><li>Не теряют своего качества при маштабирование экрана;</li><li>Не занимают много програмного места;</li><li> В отличие от растровых изображений, изменения которых возможно только через графический редактор, маштабируемую векторную графику возможно редактировать в текстовом редакторе;</li><li>Есть возможность стилизации и анимирования картинки по средствам css или js;</li><li>Файлы в формате svg могут содержать текст который доступен для индексации поисковых систем.</li></ul></div><h3>Особенности работы с svg</h3> В файле svg порядок отображения (z-index) определяется порядком элементов в файле. Преоритет отдаётся нижниму элементу.</p> <h3>Варианты интеграция svg на страницу:</h3></div>', 
					},
					{id: 2, title: 'Зачем делать свой сайт для бизнеса', },
					{id: 3, title: 'Зачем делать свой сайт для бизнеса?',},
					{id: 4, title: '', text: ''},
					{id: 5, title: '', text: ''},
				],
				article: [],

				menuHeaderLists: [
					{id: 1, title: 'Главная', href: '#main'},
	        {id: 2, title: 'Обо мне', href: '#aboutMe'},
	        {id: 3, title: 'Навыки', href: '#skills'},
	        {id: 4, title: 'Образование', href: '#education'},
	        {id: 5, title: 'Портфолио', href: '#portfolio'},
	        {id: 6, title: 'Отзывы', href: '#reviews'},
	        {id: 7, title: 'Опыт работы', href: '#workExperience'},
	        {id: 8, title: 'Новости', href: '#news'},
	        {id: 9, title: 'Обратная связь', href: '#feedback'},
				],
			}
		},
		mounted(){
			let arrayArticles = this.articles;
			let indicator = this.$route.params.id;
			let article = this.article;

			this.article = arrayArticles.filter( articl => articl.id == indicator );
			console.log(this.article[0].title);

			for (var i = 0; i < arrayArticles.length; i++) {
				if (arrayArticles[i].id == indicator) {
					
					article = { ...arrayArticles[i] };
					// console.log(article.title);
				}
				// console.log(article.title);
			}
			
		},
	}
</script>
<style lang="scss" scoped>
@import '@/scss/style.scss';
@import '@/scss/_mixins.scss';
.wrapper{
	.article{
		width: 77%;
		display: flex;
		flex-direction: column;
		justify-content: space-around;

		.menuHeader{
			height: 90px;
		}
		.article__wrapper{
			@include blockMain(100%, auto);
			text-align: left;
			padding: 0 5%;
			flex-wrap: wrap;
			margin-top: 1%;
			margin-bottom: 1%;
		}
		.article__text>p{
			font-size: 1rem;
		}
		.article__title{
			display: flex;
			@include headingMinBlock(100%, 80px);
		}
		.article__title>h1{
			margin: auto;
			@include headingMin(2rem, 700);
		}
		.comments{
			@include blockMain(100%, auto);
			flex-direction: column;

			.comments__form{
				display: flex;
				width: 80%;
				margin: 2% auto;
				height: auto;
			}
			.comments__textarea{
				width: 70%;
				height: auto;
			}
			.comments__textarea>textarea{
				width: 100%;
		    height: 100%;
		    border: 1px solid #CFCFCF;
		    border-radius: 10px;
		    resize: none;
			}
			.comments__button{
				width: 40%;
				height: auto;
				display: flex;
			}
			.comments__button>button{
				@include buttonMain(60%, 80%, 1rem);
				margin: auto;
			}
		}
	}
}
</style>
