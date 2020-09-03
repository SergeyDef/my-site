<template>
  <div id="app">
    <router-view/>
  </div>
</template>

<script>

</script>

<style lang="scss">
@import '~bootstrap/dist/css/bootstrap.min.css';

html{
  height: 100%;
}
body{
  height: 100%;
  color: #121212;
}
ul{
  margin-left: 0;
  padding-left: 0;
}
li{
  list-style: none;
  display: inline-block;
}
a{
  text-decoration: none;
}
input:focus{
  outline:none;
}
textarea:focus{
  outline:none;
}
button:focus{
  outline: none;
}
.btn:focus{
  box-shadow: none;
}

#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  width: 100%;
  min-height: 100%;
  display: flex;
  background-color: #F6F6F6;
}
</style>
