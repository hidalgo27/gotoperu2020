<template>
    <div class="center">
        <vs-row>
            <vs-col vs-type="flex" vs-justify="center" class="px-2" vs-align="center" w="3">
                <vs-select
                    border
                    filter
                    color="dark"
                    multiple
                    collapse-chips
                    placeholder="Where do you want to go?"
                    v-model="destinos_check"
                >
                        <vs-option
                            v-for="(destination, i) in destinos"
                            :key="i"
                            :label="destination.nombre"
                            :value="destination.value"
                            :click="dest"
                        >
                            {{destination.nombre}}
                        </vs-option>

                </vs-select>
            </vs-col>
            <vs-col vs-type="flex" vs-justify="center" class="px-2" vs-align="center" w="3">
                <vs-select
                    border
                    filter
                    color="success"
                    multiple
                    collapse-chips
                    placeholder="your Interests?"
                    v-model="value3"
                >
                    <vs-option label="Vuesax" value="1">
                        Vuesax
                    </vs-option>
                    <vs-option label="Vue" value="2">
                        Vue
                    </vs-option>
                    <vs-option label="Javascript" value="3">
                        Javascript
                    </vs-option>
                    <vs-option label="Sass" value="4">
                        Sass
                    </vs-option>
                    <vs-option label="Typescript" value="5">
                        Typescript
                    </vs-option>
                    <vs-option label="Webpack" value="6">
                        Webpack
                    </vs-option>
                    <vs-option label="Nodejs" value="7">
                        Nodejs
                    </vs-option>
                </vs-select>
            </vs-col>
            <vs-col vs-type="flex" vs-justify="center" class="px-2" vs-align="center" w="3">
                <vs-select
                    border
                    filter
                    color="success"
                    multiple
                    collapse-chips
                    placeholder="Nº of travelers"
                    v-model="value3"
                >
                    <vs-option label="Vuesax" value="1">
                        Vuesax
                    </vs-option>
                    <vs-option label="Vue" value="2">
                        Vue
                    </vs-option>
                    <vs-option label="Javascript" value="3">
                        Javascript
                    </vs-option>
                    <vs-option label="Sass" value="4">
                        Sass
                    </vs-option>
                    <vs-option label="Typescript" value="5">
                        Typescript
                    </vs-option>
                    <vs-option label="Webpack" value="6">
                        Webpack
                    </vs-option>
                    <vs-option label="Nodejs" value="7">
                        Nodejs
                    </vs-option>
                </vs-select>
            </vs-col>
            <vs-col vs-type="flex" vs-justify="center" class="px-2" vs-align="center" w="3">

                <vs-button

                    warn
                    @click="active=!active"
                    class="font-weight-bold btn-text-inquire w-100"
                >
                    <i class="bx bx-home-alt"></i> Create My Trip Now
                </vs-button>

            </vs-col>
        </vs-row>

        <vs-dialog blur v-model="active">

            <template #header>
                <h4 class="not-margin">
                    Almost <b>There!</b>
                </h4>
<!--                <p class="d-block">We need a bit more info to create your itinerary:</p>-->
            </template>

            <div class="con-form">

                <vs-input v-model="value1" class="mb-2" placeholder="User name">
                    <template #icon>
                        <i class='bx bx-user'></i>
                    </template>
                </vs-input>

                <vs-input v-model="input1" class="mb-2" placeholder="Email">
                    <template #icon>
                        @
                    </template>
                </vs-input>

                <vs-input v-model="value1" class="mb-2" placeholder="Phone number">
                    <template #icon>
                        <i class='bx bx-user'></i>
                    </template>
                </vs-input>

                <vs-row>
                    <vs-col w="6">
                        <vs-input type="number" v-model="value1" class="mb-2" placeholder="Trip duration in days">
                            <template #icon>
                                #
                            </template>
                        </vs-input>
                    </vs-col>
                    <vs-col w="6">
                        <vs-input type="date" v-model="value1" class="mb-2" placeholder="When?">
                            <template #icon>
                                <i class='bx bx-user'></i>
                            </template>
                        </vs-input>
                    </vs-col>
                </vs-row>

                <vs-select placeholder="What state planning are you in?" v-model="value">
                    <vs-option label="Vuesax" value="1">
                        Vuesax
                    </vs-option>
                    <vs-option label="Vue" value="2">
                        Vue
                    </vs-option>
                    <vs-option label="Javascript" value="3">
                        Javascript
                    </vs-option>
                    <vs-option disabled label="Sass" value="4">
                        Sass
                    </vs-option>
                    <vs-option label="Typescript" value="5">
                        Typescript
                    </vs-option>
                    <vs-option label="Webpack" value="6">
                        Webpack
                    </vs-option>
                    <vs-option label="Nodejs" value="7">
                        Nodejs
                    </vs-option>
                </vs-select>

                <vs-row class="my-3">
                    <vs-col w="2">
                        <vs-switch v-model="active2" :click="tap_form_show = !tap_form_show">
                            <template #off>
                                No
                            </template>
                            <template #on>
                                Yes
                            </template>
                        </vs-switch>
                    </vs-col>
                    <vs-col w="10">
                        <small class="pl-2">Any notes or special requests?</small>
                    </vs-col>
                </vs-row>

                <transition name="fade">
                    <textarea class="form-control mt-2 bg-light" name="" id="" rows="2" v-show="tap_form_show"></textarea>
                </transition>

            </div>

            <template #footer>
                <div class="footer-dialog">
                    <vs-button block>
                        Submit
                    </vs-button>


                        <small><i class='bx bx-lock-alt'></i> Your info is secure and never shared with 3rd parties.</small>

                </div>
            </template>
        </vs-dialog>

    </div>
</template>

<script>
    export default {
        data:() => ({
            destinos:[
                {
                    nombre: 'Machu Picchu', value: '1'
                },
                {
                    nombre: 'Cusco', value: '2'
                },
                {
                    nombre: 'Lima', value: '3'
                },
                {
                    nombre: 'Montaña 7 colores', value: '4'
                },
                {
                    nombre: 'Lago Titicaca', value: '5'
                },
                {
                    nombre: 'Camino inca', value: '6'
                }
            ],
            destinos_check: [],

            value1: '',
            value2: ['4',],
            value3: [],
            active: 0,
            active2: false,
        }),
        methods: {
            dest: function () {
                // let obj = {
                //     category_d: this.destinos_check,
                // };
                console.log(this.destinos_check);
            }
        }
    }
</script>

<style>
    .vs-select-content, .vs-input {
        width: 100%;
        max-width: 100%;
    }
    input{
        font-size: 15px !important;
    }
    button{
        font-size: 12px !important;
    }
    label{
        margin-bottom: 0 !important;
    }
    .vs-select__chips__chip {
        background: rgba(var(--vs-primary), 1);
        color: rgba(var(--vs-light), 1);
    }
    .vs-select__chips{
        background: rgba(var(--vs-light), .95);
    }
    ::placeholder { /* Chrome, Firefox, Opera, Safari 10.1+ */
        color: #1d1d1d !important;
        opacity: 1; /* Firefox */
    }
    .vs-button__content{
        font-size: 15px !important;
        font-weight: 900;
        padding: 5px;
    }
    button:focus {
        outline: none !important;
    }
    .fade-enter-active, .fade-leave-active {
        transition: opacity 1s;
    }
    .fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
        opacity: 0;
    }
</style>
