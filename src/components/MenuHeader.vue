<template>
  <header class="header">
    <nav class="menu">
      <ul class="menu__wrapper">
        <li class="menu__item button-activ">
          <a href=""><span>Home</span></a>
        </li>
        <li class="menu__item">
          <a href=""><span>About</span></a>
        </li>
        <li class="menu__item">
          <a href=""><span>Skils</span></a>
        </li>
        <li class="menu__item">
          <a href=""><span>Education</span></a>
        </li>
        <li class="menu__item">
          <a href=""><span>Portfolio</span></a>
        </li>
        <li class="menu__item">
          <a href=""><span>Testimonial</span></a>
        </li>
        <li class="menu__item">
          <a href=""><span>Experince</span></a>
        </li>
        <li class="menu__item">
          <a href=""><span>Blog</span></a>
        </li>
        <li class="menu__item">
          <a href=""><span>Contact</span></a>
        </li>
      </ul>
    </nav>
    <div class="search">
      <button type="button" class="btn">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-zoom-out" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z"/>
          <path d="M10.344 11.742c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1 6.538 6.538 0 0 1-1.398 1.4z"/>
        </svg>
      </button>
    </div>
  </header>
</template>

<script>
export default {
  name: 'LateralFace',
  props: {
    msg: String
  }
}
</script>

<style scoped lang="scss">
@import '@/scss/style.scss';
@import '@/scss/_mixins.scss';

  .header{
    @include blockMain(100%, 1%);
    justify-content: flex-end;

    .menu{
      display: flex;
      width: 88%;
      height: 100%;

      .menu__wrapper{
        width: 100%;
        height: 100%;

        .menu__item{
          width: 11%;
          height: 100%;
          margin: auto;
          cursor: pointer;
        }
        .menu__item:hover{
          background-color: #F7F7F7;
          transform: scale(1.1);
        }
        .menu__item>a{
          width: 100%;
          height: 100%;
          display: flex;
          text-decoration: none;
        }
        .menu__item>a>span{
          margin: auto;
          color: #121212;
        }
      }
    }
    .search{
      width: 10%;
    }
  }
</style>
