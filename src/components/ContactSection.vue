<template>
  <section class="contact" id="feedback">
    <a name="feedback" class="myLink"></a>
  	<div class="contact__substrate">
  		<h6>Написать мне</h6>
  	</div>
  	<div class="contact__info info">
      <div class="info__title">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-envelope-open-fill info__icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path d="M8.941.435a2 2 0 0 0-1.882 0l-6 3.2A2 2 0 0 0 0 5.4v.313l6.709 3.933L8 8.928l1.291.717L16 5.715V5.4a2 2 0 0 0-1.059-1.765l-6-3.2zM16 6.873l-5.693 3.337L16 13.372v-6.5zm-.059 7.611L8 10.072.059 14.484A2 2 0 0 0 2 16h12a2 2 0 0 0 1.941-1.516zM0 13.373l5.693-3.163L0 6.873v6.5z"/>
        </svg>
        <h2>Написать мне</h2>
      </div>
      <div class="info__text">
        <p>Ели у вас возникли вопросы, предложения или пожелания контакты для обратной связи ниже. Так же возможно сделать заказ интернет ресурса - сайт под ключь или доработка уже существующего ресурса.</p>
      </div>
    </div>
    <div class="contact__wrapper">
    	<div class="contact__block">
       <div class="contact__item phone">
         <div class="phone__heading">
           <h5>телефон</h5>
         </div>
         <div class="phone__list">
           <ul class="phone__block">
             <li class="phone__name"><span>Сотовый</span><span>:</span></li>
             <li class="phone__name"><span>Воцап</span><span>:</span></li>
           </ul>
            <ul class="phone__block">
             <li class="phone__content">+7 (977) 350-67-87</li>
             <li class="phone__content">+7 (977) 350-67-87</li>
           </ul>
         </div>
       </div>
       <div class="contact__item email">
         <div class="email__heading">
           <h5>email</h5>
         </div>
         <div class="email__list">
            <ul>
             <li class="email__content">pas.sergei2014@yandex.ru</li>
           </ul>
         </div>
       </div>
       <div class="contact__item address">
         <div class="address__heading">
           <h5>address</h5> 
         </div>
         <div class="address__text">
           <p>г. Москва м.Словянский бульвар</p>
         </div>
       </div>
      </div>
    	<div class="contact__block contact__blue">
    		<form action="" class="contact__form">
          <div class="contact__title">
            <h5>написать мне</h5>
          </div>
          <div class="contact__input"><input type="text" placeholder="Ваше имя"></div>
          <div class="contact__input"><input type="text" placeholder="Ваш Email"></div>
          <div class="contact__input"><input type="text" placeholder="Телефон"></div>
          <div class="contact__textarea"><textarea name="" id="" cols="10" rows="4" placeholder="Сообщение"></textarea></div>
          <div class="contact__button">
            <button type="button" class="btn">
              <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-envelope" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
            </svg>
            <span class="">Отправить</span>
          </button>
          </div>
        </form>
    	</div>
    </div>
  </section>
</template>

<script>
export default {
  name: 'ContactSection',
  props: {
    msg: String
  }
}
</script>

<style scoped lang="scss">
@import '@/scss/_mixins.scss';
@import '@/scss/style.scss';
@import '~bootstrap/dist/css/bootstrap.min.css';
  .contact{
		@include blockMain(100%, 10%);
			position: relative;
			padding: 4% 6%;
			flex-direction: column;
      justify-content: space-between;

		.contact__substrate{
			@include substrate(90%, 90%);
		}
		.contact__substrate>h6{
			@include substrateText(4rem, 900, 0.1);
		}
		.contact__wrapper{
      z-index: 9;
			width: 100%;
			height: 80%;
			display: flex;
      justify-content: space-between;
		}
		.contact__block{
			width: 49%;
      height: 100%;
		}
    .contact__item{
      width: 100%;
      height: 33.3%;
      text-align: left;
      padding: 10% 8%;
    }
    .phone{
      
      .phone__heading{
        width: 100%;
        text-transform: uppercase;
      }
      .phone__block{
        width: 50%;
      }
      .phone__list{
        padding-top: 1%;
        display: flex;
      }
      .phone__name{
        width: 70%;
        padding-bottom: 10px;
        display: flex;
        justify-content: space-between;
      }
      .phone__content{
        display: flex;
        width: 100%;
        padding-bottom: 10px;
      }
    }
    .email{
      box-shadow:1px 1px 100px 1px rgba(0,0,0,0.21);
      -webkit-box-shadow:1px 1px 100px 1px rgba(0,0,0,0.21);
      -moz-box-shadow:1px 1px 100px 1px rgba(0,0,0,0.21);

      .email__heading{
        width: 100%;
        text-transform: uppercase;
      }
      .email__list{
        padding-top: 1%;
        display: flex;
      }
      .email__content{
        display: flex;
      }
    }
    .address{

      .address__heading{
        width: 100%;
        text-transform: uppercase;
      }
      .address__text{
        padding-top: 1%;
      }
    }

		.contact__blue{
			background-color: #2196F3;
      width: 49%;
      height: 100%;
		}
    .contact__form{
      width: 100%;
      height: 100%;
      display: flex;
      text-align: left;
      flex-direction: column;
      justify-content: space-between;
      padding: 10% 8%;
    }
    .contact__title{
      width: 100%;
      height: 8%;
    }
    .contact__title>h5{
      color: #ffffff;
      text-transform: uppercase;
      font-size: 1.2rem;
      font-weight: 700;
    }
    .contact__input{
      width: 100%;
      height: 8%;
    }
    .contact__input>input{
      color: #ffffff;
      width: 100%;
      opacity: 0.6;
      background-color: #2196F3;
      border-left: none;
      border-right: none;
      border-top: none;
      border-bottom: 2px solid #ffffff; 
    }
    .contact__input>input:focus{
      opacity: 0.9;
    }
    .contact__input>input::-webkit-input-placeholder{
      color: #ffffff;
    }
    .contact__input>input:-moz-placeholder{
      color: #ffffff;
    }
    .contact__input>input::-moz-placeholder{
      color: #ffffff;
    }
    .contact__input>input:-ms-input-placeholder{
      color: #ffffff;
    }
    .contact__textarea{
      width: 100%;
      height: 18%;
    }
    .contact__textarea>textarea{
      color: #ffffff;
      width: 100%;
      resize: none;
      opacity: 0.6;
      background-color: #2196F3;
      border-left: none;
      border-right: none;
      border-top: none;
      border-bottom: 2px solid #ffffff; 
    }
    .contact__textarea>textarea::-webkit-input-placeholder{
      color: #ffffff;
    }
    .contact__textarea>textarea:-moz-placeholder{
      color: #ffffff;
    }
    .contact__textarea>textarea::-moz-placeholder{
      color: #ffffff;
    }
    .contact__textarea>textarea:-ms-input-placeholder{
      color: #ffffff;
    }
    .contact__button{
      width: 100%;
      height: 12%;
    }
    .contact__button>button{
      display: flex;
      width: 35%;
      height: 100%;
      border-radius: 0;
      background-color: #ffffff;
    }
    .contact__button>button>svg{
      display: block;
      margin: auto;
    }
    .contact__button>button>span{
      display: block;
      margin: auto;
    }
	}
  @media (max-width: 1140px){
      .contact{

        .contact__substrate{
          
        }
        .contact__substrate>h6{
          
        }
        .contact__wrapper{
        
        }
        .contact__block{
          width: 39%;
        }
        .contact__item{
          
        }
        .phone{
          
          .phone__heading{
           
          }
          .phone__block{
          }
          .phone__list{
           
          }
          .phone__name{
           
          }
          .phone__content{
            
          }
        }
        .email{

          .email__heading{
            
          }
          .email__list{
            
          }
          .email__content{
            
          }
        }
        .address{

          .address__heading{

          }
          .address__text{

          }
        }

      .contact__blue{
        width: 59%;
      }
      .contact__form{
        
      }
      .contact__title{
        
      }
      .contact__title>h5{
        
      }
      .contact__input{
       
      }
      .contact__input>input{
        
      }
      .contact__input>input:focus{

      }
      .contact__input>input::-webkit-input-placeholder{

      }
      .contact__input>input:-moz-placeholder{
      }
      .contact__input>input::-moz-placeholder{
      }
      .contact__input>input:-ms-input-placeholder{
      }
      .contact__textarea{

      }
      .contact__textarea>textarea{

      }
      .contact__textarea>textarea::-webkit-input-placeholder{
      }
      .contact__textarea>textarea:-moz-placeholder{
      }
      .contact__textarea>textarea::-moz-placeholder{
      }
      .contact__textarea>textarea:-ms-input-placeholder{
      }
      .contact__button{

      }
      .contact__button>button{
      }
      .contact__button>button>svg{
      }
      .contact__button>button>span{
      }
    }
  }
  @media (max-width: 967px){
      .contact{
        height: 12%;

        .contact__substrate{
          
        }
        .contact__substrate>h6{
          
        }
        .contact__wrapper{
          height: 90%;
          flex-direction: column;
        }
        .contact__block{
          width: 80%;
          height: 40%;
          margin: 0 auto;
        }
        .contact__item{
          padding: 4% 8%;
        }
        .phone{
          
          .phone__heading{
           
          }
          .phone__block{
          }
          .phone__list{
           
          }
          .phone__name{
           
          }
          .phone__content{
            
          }
        }
        .email{

          .email__heading{
            
          }
          .email__list{
            
          }
          .email__content{
            
          }
        }
        .address{

          .address__heading{

          }
          .address__text{

          }
        }

      .contact__blue{
        height: 59%;
      }
      .contact__form{
        
      }
      .contact__title{
        
      }
      .contact__title>h5{
        
      }
      .contact__input{
       
      }
      .contact__input>input{
        
      }
      .contact__input>input:focus{

      }
      .contact__input>input::-webkit-input-placeholder{

      }
      .contact__input>input:-moz-placeholder{
      }
      .contact__input>input::-moz-placeholder{
      }
      .contact__input>input:-ms-input-placeholder{
      }
      .contact__textarea{

      }
      .contact__textarea>textarea{

      }
      .contact__textarea>textarea::-webkit-input-placeholder{
      }
      .contact__textarea>textarea:-moz-placeholder{
      }
      .contact__textarea>textarea::-moz-placeholder{
      }
      .contact__textarea>textarea:-ms-input-placeholder{
      }
      .contact__button{

      }
      .contact__button>button{
      }
      .contact__button>button>svg{
      }
      .contact__button>button>span{
      }
    }
  }
  @media (max-width: 667px){
    .contact{
      height: 12%;
      .contact__substrate{

      }
      .contact__substrate>h6{
        font-size: 1.5rem;
      }
      .contact__wrapper{
        height: 80%;
      }
      .info{
        height: 25%;
      }
        .contact__block{
          width: 100%;
        }
          .contact__item{
          }
          .phone{
            
            .phone__heading{
            }
            .phone__heading>h5{
              font-size: 1rem;
              font-weight: 700;
            }
            .phone__block{
            }
            .phone__list{
             
            }
            .phone__name{
              font-size: 0.9rem;
            }
            .phone__content{
              font-size: 0.9rem;
            }
          }
          .email{

            .email__heading{
            }
            .email__heading>h5{
              font-size: 1rem;
              font-weight: 700;
            }
            .email__list{
              
            }
            .email__content{
              font-size: 0.9rem;
            }
          }
          .address{

            .address__heading{

            }
            .address__heading>h5{
              font-size: 1rem;
              font-weight: 700;
            }
            .address__text{
              font-size: 0.9rem;
            }
          }

        .contact__blue{
          height: 60%;
        }
        .contact__form{
          padding: 4% 8%;
        }
        .contact__title{
          
        }
        .contact__title>h5{
          
        }
      .contact__input{
        height: 7%;
      }
      .contact__input>input{
          
      }
      .contact__input>input:focus{

      }
      .contact__input>input::-webkit-input-placeholder{

      }
       .contact__input>input:-moz-placeholder{
      }
      .contact__input>input::-moz-placeholder{
      }
      .contact__input>input:-ms-input-placeholder{
      }
      .contact__textarea{

      }
      .contact__textarea>textarea{

      }
      .contact__textarea>textarea::-webkit-input-placeholder{
      }
      .contact__textarea>textarea:-moz-placeholder{
      }
      .contact__textarea>textarea::-moz-placeholder{
      }
      .contact__textarea>textarea:-ms-input-placeholder{
       }
      .contact__button{

      }
      .contact__button>button{
        width: 70%;
        margin: auto;
        justify-content: center;
      }
      .contact__button>button>svg{
      }
      .contact__button>button>span{
      }
    }
  }
</style>
