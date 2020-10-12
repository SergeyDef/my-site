<template>
  <section class="skills" id="skills">
    <a name="skills" class="myLink"></a>
  	<div class="skills__substrate">
  		<h6>Мои навыки</h6>
  	</div>
  	<div class="skills__info info">
      <div class="info__title">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-exclamation-diamond-fill info__icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
				  <path fill-rule="evenodd" d="M9.05.435c-.58-.58-1.52-.58-2.1 0L.436 6.95c-.58.58-.58 1.519 0 2.098l6.516 6.516c.58.58 1.519.58 2.098 0l6.516-6.516c.58-.58.58-1.519 0-2.098L9.05.435zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
				</svg>
        <h2>Мои навыки</h2>
      </div>
      <div class="info__text">
        <p>В данном разделе представленны мои проффесиональные навыки. Для удобства представления использованны графические прогрессбары и диаграммы.</p>
      </div>
    </div>
      <div class="skills__menu menu">
        <ul class="nav nav-tabs menu__wrapper" id="myTab" role="tablist">
          <li class="nav-item menu__item" role="presentation">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Веб разработка</a>
          </li>
          <li class="nav-item menu__item" role="presentation">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Графические редакторы</a>
          </li>
          <li class="nav-item menu__item" role="presentation">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Другие навыки</a>
          </li>
        </ul>
      </div>
      <div class="tab-content skills__professional" id="myTabContent">
        <div class="tab-pane fade show active professional" id="home" role="tabpanel" aria-labelledby="home-tab">
          <div class="professional__title">
            <h5>Проффесиональные навыки</h5>
          </div>
          <div class="professional__wrapper">
            <div class="professional__block">
              <div class="professional__item">
                <div class="professional__name"><span>HTML5</span></div>
                <div class="progress professional__progress">
                  <div class="progress-bar green__line" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
                </div>
              </div>
              <div class="professional__item">
                <div class="professional__name"><span>bootstrap-4</span></div>
                <div class="progress professional__progress">
                  <div class="progress-bar red__line" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
                </div>
              </div>
              <div class="professional__item">
                <div class="professional__name"><span>CSS3</span></div>
                <div class="progress professional__progress">
                  <div class="progress-bar bootstrap__line" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
                </div>
              </div>
            </div>
            <div class="professional__block">
              <div class="professional__item">
                <div class="professional__name"><span>React.js</span></div>
                <div class="progress professional__progress">
                  <div class="progress-bar blue__line" role="progressbar" style="width: 45%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">45%</div>
                </div>
              </div>
              <div class="professional__item">
                <div class="professional__name"><span>Vue.js</span></div>
                <div class="progress professional__progress">
                  <div class="progress-bar react__line" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">65%</div>
                </div>
              </div>
              <div class="professional__item">
              <div class="professional__name"><span>javaScript</span></div>
                <div class="progress professional__progress">
                  <div class="progress-bar purple__line" role="progressbar" style="width: 80%;" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <div class="tab-pane fade professional" id="profile" role="tabpanel" aria-labelledby="profile-tab">
        <div class="professional__title">
          <h5>Проффесиональные навыки</h5>
        </div>
        <div class="professional__wrapper">
          <div class="professional__block graphic">
            <div class="professional__item">
              <div class="professional__name"><span>Figma</span></div>
              <div class="progress professional__progress">
                <div class="progress-bar red__line" role="progressbar" style="width: 35%;" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100">35%</div>
              </div>
            </div>
            <div class="professional__item">
              <div class="professional__name"><span>Adobe Photoshop</span></div>
              <div class="progress professional__progress">
                <div class="progress-bar react__line" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
              </div>
            </div>
            <div class="professional__item">
              <div class="professional__name"><span>CorelDRAW</span></div>
              <div class="progress professional__progress">
                <div class="progress-bar bootstrap__line" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="tab-pane fade professional" id="contact" role="tabpanel" aria-labelledby="contact-tab">
        <div class="professional__title">
          <h5>Проффесиональные навыки</h5>
        </div>
        <div class="professional__wrapper">
          <div class="professional__block graphic">
            <div class="professional__item">
              <div class="professional__name"><span>Sweet Home 3D</span></div>
              <div class="progress professional__progress">
                <div class="progress-bar blue__line" role="progressbar" style="width: 90%;" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100">90%</div>
              </div>
            </div>
            <div class="professional__item">
              <div class="professional__name"><span>Git</span></div>
              <div class="progress professional__progress">
                <div class="progress-bar react__line" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
              </div>
            </div>
            <div class="professional__item">
              <div class="professional__name"><span>MS Office (Word, Excel)</span></div>
              <div class="progress professional__progress">
                <div class="progress-bar purple__line" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="language">
    	<div class="language__title">
    		<h5>Языковые навыки</h5>
    	</div>
    	<div class="language__wrapper">
	    	<div class="language__text">
	    		<p>Моим жизненным "кредом" является постоянное и не прерывное саморазвитие. Знание иностранных языков не мой основной профиль но основной, необходимый минимум присутствует.</p>
	    	</div>
	    	<div class="language__chart">
	    		<div class="language__block">
            <div class="language__russian">
              <span>Русский</span>
            </div>
          </div>
	    		<div class="language__block">
            <div class="language__english">
              <span>Английский</span>
            </div>
          </div>
	    		<div class="language__block">
            <div class="language__german">
              <span>Немецкий</span>
            </div>
          </div>
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
    z-index: 9;

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
        padding-top: 1.5%;
    	}
    	.menu__item{
    		display: flex;
    		padding: 6px 16px;
    		height: 70%;
    	}
    	.menu__item:hover{
    		
    	}
    	.menu__item>a{
        width: 100%;
        height: 100%;
        color: #111111;
        font-weight: 700;
    	}
      .menu__item>a.active{
        border: none;
        background-color: #ffffff;
        cursor: pointer;
        z-index: 9;
        box-shadow:1px 1px 100px 1px rgba(0,0,0,0.21);
        -webkit-box-shadow:1px 1px 100px 1px rgba(0,0,0,0.21);
        -moz-box-shadow:1px 1px 100px 1px rgba(0,0,0,0.21);
        color: #1F96F2;
      }
    }
    .skills__professional{
    	height: 40%;
      z-index: 9;
      background-color: #ffffff;
      box-shadow:1px 1px 100px 1px rgba(0,0,0,0.21);
      -webkit-box-shadow:1px 1px 100px 1px rgba(0,0,0,0.21);
      -moz-box-shadow:1px 1px 100px 1px rgba(0,0,0,0.21);
    }
    .professional{
      padding: 3%;
      width: 100%;
      height: 100%;
      z-index: 9;

    	.professional__title{
    		@include headingMinBlock(100%, 22%);
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
    	.green__line{
    		background-color: #2196F3;
    	}
    	.bootstrap__line{
    		background-color: #26A59A;
    	}
    	.red__line{
    		background-color: #EE534F;
    	}
    	.blue__line{
    		background-color: #3F51B5;
    	}
    	.react__line{
    		background-color: #FCC02C;
    	}
    	.purple__line{
    		background-color: #AB46BC;
    	}
      .graphic{
        width: 80%;
        margin: auto;
      }
    }
    .language{
      z-index: 9;
    	width: 100%;
    	height: 35%;
    	padding-top: 2%;

    	.language__title{
    		@include headingMinBlock(100%, 20%);
        display: flex;
    	}
    	.language__title>h5{
    		@include headingMin(1rem, 700);
        margin: auto 0;
    	}
    	.language__wrapper{
    		width: 100%;
    		display: flex;
    	}
    	.language__text{
    		width: 50%;
        display: flex;
        padding-right: 5%;
    		text-align: left;
    	}
      .language__text>p{
        margin: auto 0;
        height: 60%;
      }
    	.language__chart{
    		width: 50%;
    		display: flex;
    	}
      .language__block{
        width: 33.33%;
      }
    	.language__russian{
        background: #ffffff;
        width: 150px; 
        height: 150px;
        text-align: center;
        font: 16px/100px Times, serif;
        border: 24px solid #2196F3;
        border-right: 24px solid #2196F3;
        border-radius: 100px;
    	}
      .language__english{
        background: #ffffff;
        width: 150px; 
        height: 150px;
        text-align: center;
        font: 16px/100px Times, serif;
        border: 24px solid #26A59A;
        border-right: 24px solid #F0F0F0;
        border-radius: 100px;
      }
      .language__german{
        background: #ffffff;
        width: 150px; 
        height: 150px;
        text-align: center;
        font: 16px/100px Times, serif;
        border: 24px solid #F0F0F0;
        border-right: 24px solid #EE534F;
        border-radius: 100px;
      }
    }
  }
  @media (max-width: 967px){
    .skills{
      .skills__substrate{
      }
      .skills__substrate>h6{
      }
      .menu{
        .menu__wrapper{
        }
        .menu__item{
        }
        .menu__item:hover{
          
        }
        .menu__item>a{
        }
        .menu__item>a.active{
        }
      }
      .skills__professional{
      }
      .professional{
        .professional__title{
        }
        .professional__title>h5{
        }
        .professional__wrapper{
        }
        .professional__block{
        }
        .professional__item{
        }
        .professional__name{
        }
        .professional__name>span{
        }
        .professional__progress{
        }
        .green__line{
        }
        .bootstrap__line{
        }
        .red__line{
        }
        .blue__line{          }
        .react__line{
        }
        .purple__line{
        }
        .graphic{
         }
      }
       .language{

        .language__title{
           width: 90%;
          margin: auto;
        }
        .language__title>h5{
        }
        .language__wrapper{
          flex-direction: column;
        }
        .language__text{
          width: 90%;
          margin: auto;
          padding: 0;          }
        .language__chart{
          width: 90%;
          margin: auto;
          padding: 0;
        }
        .language__block{
        }
        .language__russian{
        }
        .language__english{
        }
        .language__german{
        }
      }
    }
  }
  @media (max-width: 667px){
    .skills{
      .skills__substrate{
      }
      .skills__substrate>h6{
        font-size: 1.5rem;
      }
      .menu{
        .menu__wrapper{
          height: 60%;
        }
        .menu__item{
          padding: 0;
          height: 45%;
        }
        .menu__item:hover{
          
        }
        .menu__item>a{
          font-size: 0.6rem;
          padding: .5rem 0.5rem;
        }
        .menu__item>a.active{
        }
      }
      .skills__professional{
      }
      .professional{
        .professional__title{
          height: 15%;
        }
        .professional__title>h5{
        }
        .professional__wrapper{
          flex-direction: column;
        }
        .professional__block{
          width: 100%;
          margin: auto;
          padding-top: 8%;
        }
        .professional__item{
        }
        .professional__name{
          width: 30%;
        }
        .professional__name>span{
          font-size: 0.765rem;
        }
        .professional__progress{
        }
        .green__line{
        }
        .bootstrap__line{
        }
        .red__line{
        }
        .blue__line{

        }
        .react__line{
        }
        .purple__line{
        }
        .graphic{
         }
      }
       .language{

        .language__title{
          width: 90%;
          margin: auto;
        }
        .language__title>h5{
          width: 100%;
          text-align: center;
        }
        .language__wrapper{
          flex-direction: column;
        }
        .language__text{
          width: 90%;
          margin: auto;
          padding: 0;
        }
        .language__text{
          height: auto;
          margin: 0;
        }
        .language__chart{
          width: 90%;
          margin: auto;
          padding: 0;
        }
        .language__block{
        }
        .language__russian{
          width: 100px;
          height: 100px;
          font: 12px/190px Times, serif;
        }
        .language__english{
          width: 100px;
          height: 100px;
          font: 12px/190px Times, serif;
        }
        .language__german{
          width: 100px;
          height: 100px;
          font: 12px/190px Times, serif;
        }
      }
    }
  }
   @media (max-width: 400px){
      .skills{
        .skills__substrate{
        }
        .skills__substrate>h6{
        }
        .menu{
          .menu__wrapper{
          }
          .menu__item{
          }
          .menu__item:hover{
            
          }
          .menu__item>a{
          }
          .menu__item>a.active{
          }
        }
        .skills__professional{
        }
        .professional{
          .professional__title{
          }
          .professional__title>h5{
          }
          .professional__wrapper{
          }
          .professional__block{
          }
          .professional__item{
          }
          .professional__name{
          }
          .professional__name>span{
          }
          .professional__progress{
          }
          .green__line{
          }
          .bootstrap__line{
          }
          .red__line{
          }
          .blue__line{

          }
          .react__line{
          }
          .purple__line{
          }
          .graphic{
           }
        }
         .language{

          .language__title{
          }
          .language__title>h5{
          }
          .language__wrapper{
          }
          .language__text{
            width: 100%;
          }
          .language__text{
          }
          .language__chart{
            width: 100%;
          }
          .language__block{
          }
          .language__russian{
          }
          .language__english{
          }
          .language__german{
          }
        }
      }
   }
</style>
