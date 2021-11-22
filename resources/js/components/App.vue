<template>
    <div id="app">
        <Header/>
        <Main/>
        <Footer/>
    </div>
</template>

<script>
import Header from './Header';
import Main from './Main';
import Footer from './Footer';

export default {
    name: 'App',
    components: {
        Header,
        Main,
        Footer
    }
}
</script>