import Vue from 'vue';
import VeeValidate from 'vee-validate';

Vue.use(VeeValidate);
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 * disturbing the beautifull documentation care
 * This is the sample asdasd
 */

require('./bootstrap');


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the body of the page. From here, you may begin adding components to
 * the application, or feel free to tweak this setup for your needs.
 */



Vue.component('example', require('./components/Example.vue'));

Vue.component('todo-item', {
    // The todo-item component now accepts a
    // "prop", which is like a custom attribute.
    // This prop is called todo.
    props: ['todo'],
    template: '<li>{{ todo.text }}</li>'
});

/*

const app = new Vue({
    el: '#app',
    data: {

        message: 'Hello Vue.js!!!!!!!!!!!',
        todos: [
            {text: 'this is the task 1'},
            {text: 'this is the task 2'},
            {text: 'this is the task 3'},

        ],
        greeting: 'Welcome to your Vue.js app!',
        docsURL: 'http://vuejs.org/guide/',
        gitterURL: 'https://gitter.im/vuejs/vue',
        forumURL: 'http://forum.vuejs.org/',
    },

    methods: {
        reverseMessage: function () {
            this.message = this.message.split('').reverse().join('')
        }
    },

    created: function () {
        console.log('created method');
    }

});
*/

var container = new Vue({

    el: '#container',
    data: {
        id: '',
        post: '',
        first: '',
        second: '',
        xp: 0,

        todos: [
            {id: 1, text: "this is the text1"},
            {id: 2, text: "this is the text2"},
            {id: 3, text: "this is the text3"},
            {id: 4, text: "this is the text4"},


        ]
    },
    watch: {

        id: _.debounce(function () {

            console.log('function id changed ' + this.id);
        }, 5000)

    },

    computed: {
        fullname: function () {

            return this.first + "  <<->> " + this.second + " date:  " + new Date().getMilliseconds();
        },
        level: function () {
            if (this.xp < 5)
                return 'beginner';
            else if (this.xp <= 7)
                return 'intermediate';
            else
                return 'expert';
        },


    },
    methods: {


        inc: function () {
            this.xp++;
        },
        dec: function () {
            if (this.xp > 0) {
                this.xp--;
            }

        }


    }

});
