<template>
  <section class="education">
  	<a name="education" class="myLink"></a>
  	<div class="education__substrate">
  		<h6>Образование</h6>
  	</div>
  	<div class="education__info info">
      <div class="info__title">
      	<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-graph-up info__icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				  <path d="M0 0h1v16H0V0zm1 15h15v1H1v-1z"/>
				  <path fill-rule="evenodd" d="M14.39 4.312L10.041 9.75 7 6.707l-3.646 3.647-.708-.708L7 5.293 9.959 8.25l3.65-4.563.781.624z"/>
				  <path fill-rule="evenodd" d="M10 3.5a.5.5 0 0 1 .5-.5h4a.5.5 0 0 1 .5.5v4a.5.5 0 0 1-1 0V4h-3.5a.5.5 0 0 1-.5-.5z"/>
				</svg>
        <h2>Образование</h2>
      </div>
      <div class="info__text">
        <p>В этом разделе представлены мои достижения в сфере официального образования. К сожалению или к счастью они не имеют отношения к тому, чем я сейчас занимаюсь, тоесть к веб разработки.</p>
			</div>
		</div>
    <div class="accordion education__list" id="accordionExample">
			<div class="card">
				<div class="card-header education__description" id="headingOne">
					<div class="education__picchu">
						<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pen education__icon text__blue" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" d="M5.707 13.707a1 1 0 0 1-.39.242l-3 1a1 1 0 0 1-1.266-1.265l1-3a1 1 0 0 1 .242-.391L10.086 2.5a2 2 0 0 1 2.828 0l.586.586a2 2 0 0 1 0 2.828l-7.793 7.793zM3 11l7.793-7.793a1 1 0 0 1 1.414 0l.586.586a1 1 0 0 1 0 1.414L5 13l-3 1 1-3z"/>
							<path fill-rule="evenodd" d="M9.854 2.56a.5.5 0 0 0-.708 0L5.854 5.855a.5.5 0 0 1-.708-.708L8.44 1.854a1.5 1.5 0 0 1 2.122 0l.293.292a.5.5 0 0 1-.707.708l-.293-.293z"/>
							<path d="M13.293 1.207a1 1 0 0 1 1.414 0l.03.03a1 1 0 0 1 .03 1.383L13.5 4 12 2.5l1.293-1.293z"/>
						</svg>
					</div>
			    <h5 class="mb-0  education__heading">
			      <button class="btn btn-link education__button" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
			      	<div class="education__text">
			      		<span class="education__name">НОУ ВПО Московский институт психологии</span>
			      		<span class="education__profession"> - Психологии, Практическая психология</span>
							</div>
							<div class="education__plus block__blue"></div>
						</button>
					</h5>
			  </div>

			  <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
					<div class="card-body">
						<table class="training">
							<tr class="training__tr">
								<td class="training__name"><span>Время обучения</span></td>
								<td class="training__value"><p>2012-2017 г.</p></td>
							</tr>
							<tr class="training__tr">
								<td class="training__name"><span>Факультет</span></td>
								<td class="training__value"><p>Психологии, Практическая психология</p></td>
							</tr>
							<tr class="training__tr">
								<td class="training__name"><span>Специальнось</span></td>
								<td class="training__value"><p>Практическая психология</p></td>
							</tr>
							<tr class="training__tr">
								<td class="training__name"><span>Степень образования</span></td>
								<td class="training__value"><p>Высшее (бакалавр)</p></td>
							</tr>
						</table>
					</div>
			  </div>
			</div>
			<div class="card">
				<div class="card-header education__description" id="headingTwo">
					<div class="education__picchu">
						<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pen education__icon text__green" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
							<path fill-rule="evenodd" d="M5.707 13.707a1 1 0 0 1-.39.242l-3 1a1 1 0 0 1-1.266-1.265l1-3a1 1 0 0 1 .242-.391L10.086 2.5a2 2 0 0 1 2.828 0l.586.586a2 2 0 0 1 0 2.828l-7.793 7.793zM3 11l7.793-7.793a1 1 0 0 1 1.414 0l.586.586a1 1 0 0 1 0 1.414L5 13l-3 1 1-3z"/>
							<path fill-rule="evenodd" d="M9.854 2.56a.5.5 0 0 0-.708 0L5.854 5.855a.5.5 0 0 1-.708-.708L8.44 1.854a1.5 1.5 0 0 1 2.122 0l.293.292a.5.5 0 0 1-.707.708l-.293-.293z"/>
							<path d="M13.293 1.207a1 1 0 0 1 1.414 0l.03.03a1 1 0 0 1 .03 1.383L13.5 4 12 2.5l1.293-1.293z"/>
						</svg>
					</div>
					<h5 class="mb-0 education__heading">
			      <button class="btn btn-link collapsed education__button" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
			      	<div class="education__text">
								<span class="education__name">ГОУ СПО Колледж сферы услуг №32</span>
								<span class="education__profession"> - Технологии продукции общественного питания</span>
							</div>
							<div class="education__plus block__green"></div>
			      </button>
					</h5>
				</div>
				<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
					<div class="card-body">
						<table class="training">
							<tr class="training__tr">
								<td class="training__name"><span>Время обучения</span></td>
								<td class="training__value"><p>2007-2010 г.</p></td>
							</tr>
							<tr class="training__tr">
								<td class="training__name"><span>Факультет</span></td>
								<td class="training__value"><p>Технологии продукции общественного питания</p></td>
							</tr>
							<tr class="training__tr">
								<td class="training__name"><span>Специальнось</span></td>
								<td class="training__value"><p>Технолог общественного питания. Повар 4-го разряда</p></td>
							</tr>
							<tr class="training__tr">
								<td class="training__name"><span>Степень образования</span></td>
								<td class="training__value"><p>Средне специальное</p></td>
							</tr>
						</table>
			    </div>
			  </div>
			</div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'EducationSection',
  props: {
    msg: String
  }
}
</script>

<style scoped lang="scss">
@import '@/scss/_mixins.scss';
@import '@/scss/style.scss';
@import '~bootstrap/dist/css/bootstrap.min.css';
  .education{
		@include blockMain(100%, 8%);
    position: relative;
    padding: 4% 6%;
    flex-direction: column;

		.education__substrate{
			@include substrate(90%, 90%);
		}
		.education__substrate>h6{
			@include substrateText(4rem, 900, 0.1);
		}
    .education__list{
    	width: 100%;
    	z-index: 9;
    	margin: auto;
    	border-radius: 0;
    	box-shadow:1px 1px 100px 1px rgba(0,0,0,0.21);
    	-webkit-box-shadow:1px 1px 100px 1px rgba(0,0,0,0.21);
    	-moz-box-shadow:1px 1px 100px 1px rgba(0,0,0,0.21);
    }
    .education__description{
    	display: flex;
    	border-radius: 0;
    	padding: 0;
    	height: 60px;
    }
    .education__picchu{
    	width: 60px;
    	display: flex;
    	border-right: 2px solid #F0F0F0;
    }
    .education__icon{
    	margin: auto;
    	width: 30px;
    	height: 30px;
    }
    .education__button{
    	width: 100%;
    	height: 100%;
    	display: flex;
    	justify-content: space-between;
    	text-decoration: none;
    }
    .education__button:focus {
		    outline: 0;
		    outline-offset: 0;
		    box-shadow: none;
		}
		.education__heading{
			width: 100%;
		}
		.education__text{
			margin: auto 0;
		}
		.education__name{
			@include headingMin(1rem, 700);
			color: #2c3e50;
		}
		.education__profession{
			@include headingMin(1rem, 500);
			color: #797979;
		}
		.education__plus{
			height: 18px; 
			width: 3px;
			position: relative; 
			left: -10px;
			top: 10px;
		}
		.education__plus:after {
			content: "";
			height: 3px; 
			width: 18px;
			position: absolute; 
			left: -7px; 
			top: 7px;
		}
		.text__blue{
			color: #2095F2;
		}
		.block__blue{
			background: #2095F2;
		}
		.block__blue:after{
			background: #2095F2;
		}
		.text__green{
			color: #27A69B;
		}
		.block__green{
			background: #27A69B;
		}
		.block__green:after{
			background: #27A69B;
		}
		.text__orange{
			color: #EE534F;
		}
		.block__orange{
			background: #EE534F;
		}
		.block__orange:after{
			background: #EE534F;
		}
		.text__yellow{
			color: #FAC12C;
		}
		.block__yellow{
			background: #FAC12C;
		}
		.block__yellow:after{
			background: #FAC12C;
		}
		.training{
			width: 90%;
			margin: auto;
			text-align: left;

			.training__tr{
				border: 2px solid #2c3e50;
			}
			.training__name{
				height: 40px;
				padding-left: 2%;
				width: 25%;
				border-right: 2px solid #2c3e50;
			}
			.training__name>span{
				text-transform: uppercase;
				font-weight: 600;
			}
			.training__value{
				height: 40px;
				display: flex;
				padding-left: 3%;
			}
			.training__value>p{
				margin: auto 0;
			}
		}
	}
</style>
