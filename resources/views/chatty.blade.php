@extends('layouts.app')

@section('content')
    <div id="container" class="container" xmlns:v-bind="http://www.w3.org/1999/xhtml">

        @component('jumbotron')
            @slot('title')
                This is the title of jumbotron
            @endslot
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab adipisci autem ea ex illum impedit itaque
            laborum, maxime molestiae non nostrum numquam obcaecati quae quas, quis reiciendis saepe sunt ullam!


        @endcomponent


        <div class="row">
            <div class="col-md-12">
                <h1>You are <strong v-text="level"></strong></h1>
                <h2>exp -> @{{ xp }}</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <button @click="inc" class="btn btn-lg btn-primary pull-right" :disabled="xp > 10">
                    <span class="glyphicon glyphicon-arrow-up"></span>
                    Add Exp
                </button>
            </div>
            <div class="col-md-6">
                <button @click="dec" class="btn btn-lg btn-primary right " :disabled="xp <= 0">
                    <span class="glyphicon glyphicon-arrow-down"></span>
                    Remove Exp
                </button>
            </div>

        </div>


        <div class="col-md-12">
            <label class="label" for="email">Email</label>
            <p :class="{ 'control': true }">
                <input v-validate="'required|email'" :class="{'input': true, 'is-danger': errors.has('email') }"
                       name="email" type="text" placeholder="Email">
                <span v-show="errors.has('email')"
                      class="text-danger is-danger bg-danger">@{{ errors.first('email') }}</span>
            </p>
        </div>


        <div class="row">

            <ul v-for="todo in todos" :key="todo.id">
                <li>@{{todo.text}}</li>
            </ul>

            <div class="col-md-12 text-center">
                <h1>This is the Full Name: @{{ fullname }} </h1>
            </div>
            <div class="col-md-6">

                <input class="form-control" v-model="first" id="txtFirst" placeholder="first name"/>
            </div>
            <div class="col-md-6">
                <input class="form-control" v-model="second" id="txtSecond" placeholder="second name"/>
            </div>

        </div>


        <form action="" method="post" role="form">
            <legend>VueJs 2.0</legend>

            <div class="form-group">

                <span> @{{ id }} </span>

                <label for="txtInput"></label>
                <input type="text" class="form-control" name="txtInput" id="txtInput" v-model="id"
                       placeholder="Input...">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </form>


        {{--

        this is the main page of container
        <br/><br/><br/>

        @{{ message }}

        <br/><br/><br/>

        <span v-bind:title="message" v-for="todo in todos" >
            @{{ todo.text  }} <br/>
        </span>

        <button @click="reverseMessage">Reverese Message </button>

        <example>
            Sample Slot Written
        </example>


        <input  v-model="message" />

        --}}
        {{--<task> this is the task</task>--}}{{--


        --}}

    </div>

@endsection
