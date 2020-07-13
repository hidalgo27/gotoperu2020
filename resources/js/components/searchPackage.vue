<template>
    <section class="my-4">
        <div class="container">

            <div class="row align-items-center mb-3 justify-content-between">
                <div class="col-auto">
                    <h2 class="font-weight-semi-bold h3">Travel Packages</h2>
                </div>
                <div class="col-5 text-right">
                    <button class="btn btn-primary btn-sm" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        <i class="el-icon-s-operation font-weight-bold h5 m-0"></i>
                    </button>
<!--                    <searchpackage-component></searchpackage-component>-->
                </div>

            </div>

            <div class="row">

                <div class="col">
                    <form @submit.prevent="filterPackage">
                    <div class="row">

                        <div class="collapse w-100 my-4 col-12" id="collapseExample">
                            <div class="card card-body">
                                <div class="row">
                                    <div class="col-12">

                                        <div class="">

                                            <!--                                <div class="card-header bg-g-yellow">-->
                                            <!--                                    <h5 class="font-weight-bold m-0 text-white">Filtrar paquetes por:</h5>-->
                                            <!--                                </div>-->
                                            <div class="row align-items-center">
                                                <div class="col">
                                                    <ul class="nav nav-tabs nav-fill box-tab-detail shadow-sm" id="myTab" role="tablist">
                                                        <li class="nav-item cursor-pinter">
                                                            <span class="nav-link font-weight-bold active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Destinations</span>
                                                        </li>
                                                        <li class="nav-item cursor-pinter">
                                                            <span class="nav-link font-weight-bold" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Days</span>
                                                        </li>
                                                        <li class="nav-item cursor-pinter">
                                                            <span class="nav-link font-weight-bold" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Categories</span>
                                                        </li>
                                                    </ul>

                                                    <div class="tab-content bg-white p-3 shadow-sm" id="myTabContent">
                                                        <div class="tab-pane pt-1 fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                                            <div class="row align-items-center justify-content-center">
                                                                <template v-for="destino in destinos">
                                                                    <destino-package v-bind:destino="destino" v-bind:destinosSeleccionados="destinosSeleccionados" v-on:checked="selectDestino"></destino-package>
                                                                </template>
                                                            </div>
                                                            <!--                                                    <hr>-->
                                                            <!--                                                    <div class="row align-items-center">-->
                                                            <!--                                                        <template v-for="tiempo in tiempos">-->
                                                            <!--                                                            <tiempo-package v-bind:tiempo="tiempo" v-bind:tiemposSeleccionados="tiemposSeleccionados" v-on:checked="selectTiempo"></tiempo-package>-->
                                                            <!--                                                        </template>-->
                                                            <!--                                                    </div>-->
                                                        </div>
                                                        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                                                            <div class="row align-items-center justify-content-center">
                                                                <template v-for="tiempo in tiempos">
                                                                    <tiempo-package v-bind:tiempo="tiempo" v-bind:tiemposSeleccionados="tiemposSeleccionados" v-on:checked="selectTiempo"></tiempo-package>
                                                                </template>
                                                            </div>

                                                        </div>
                                                        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">

                                                            <div class="row align-items-center justify-content-center">
                                                                <template v-for="categoria in categorias">
                                                                    <categoria-package v-bind:categoria="categoria" v-bind:categoriasSeleccionados="categoriasSeleccionados" v-on:checked="selectCategory"></categoria-package>
                                                                </template>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-3">
                                                    <button type="submit" class="btn btn-block btn-g-yellow text-white position-relative font-weight-bold" v-show="btnview">
                                                        <i class="el-icon-search"></i> Search
                                                    </button>
                                                    <div class="text-center">
                                                        <i class="el-icon-loading font-weight-bold h3" v-show="loading"></i>
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="row">

                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <template v-for="paquete in paquetes">
                            <template v-for="(paquete_p, index) in paquete.package">
                                <template v-if="paquete_p.paquetes_destinos && !paquete_p.paquetes_categoria">
                                    <template v-if="paquete_p.paquetes_destinos.length > 0">
                                        <search-list-package v-bind:paquete_p="paquete_p" :paquete_destinations="paquete.destinations"></search-list-package>
                                    </template>
                                </template>

                                <template v-if="!paquete_p.paquetes_destinos && paquete_p.paquetes_categoria">
                                    <template v-if="paquete_p.paquetes_categoria.length > 0">
                                        <search-list-package v-bind:paquete_p="paquete_p" :paquete_category="paquete.category" :paquete_destinations="paquete.destinations"></search-list-package>
                                    </template>
                                </template>

                                <template v-if="paquete_p && !paquete_p.paquetes_destinos && !paquete_p.paquetes_categoria">
                                    <search-list-package v-bind:paquete_p="paquete_p" :paquete_category="paquete.category" :paquete_destinations="paquete.destinations"></search-list-package>
                                </template>

                                <template v-if="paquete_p.paquetes_destinos && paquete_p.paquetes_categoria">
                                    <template v-if="paquete_p.paquetes_categoria.length > 0">
                                        <search-list-package v-bind:paquete_p="paquete_p" :paquete_category="paquete.category" :paquete_destinations="paquete.destinations"></search-list-package>
                                    </template>
                                </template>

                            </template>

                        </template>

                    </div>
                    </form>
                </div>

            </div>
        </div>
    </section>

</template>

<script>
    export default {
        data() {
            return {
                destinos:[
                    {
                        nombre: 'Arequipa', value: '85'
                    },
                    {
                        nombre: 'Lima', value: '84'
                    },
                    {
                        nombre: 'Cusco', value: '80'
                    },
                    {
                        nombre: 'Machu Picchu', value: '81'
                    },
                    {
                        nombre: 'Rainbow mountain', value: '83'
                    },
                    {
                        nombre: 'Amazon', value: '84'
                    },
                    {
                        nombre: 'Lake Titicaca', value: '85'
                    },
                ],
                categorias:[
                    {
                        nombre: 'Family', value: '17', category: ''
                    },
                    {
                        nombre: 'Classic', value: '16', category: ''
                    },
                    {
                        nombre: 'Long', value: '18', category: ''
                    }
                ],
                tiempos:[
                    {
                        nombre: '3-5 days', value: '3-5', duration: ''
                    },
                    {
                        nombre: '6-8 days', value: '6-8', duration: ''
                    },
                    {
                        nombre: '9-11 days', value: '9-11', duration: ''
                    },
                    {
                        nombre: '11-15 days', value: '11-15', duration: ''
                    },
                    {
                        nombre: '16+', value: '16+', duration: ''
                    },
                ],
                destinosSeleccionados: [],
                tiemposSeleccionados: [],
                categoriasSeleccionados: [],
                paquetes: [],
                destinations: [],
                loading: false,
                btnview: true
            }
        },
        created(){
            axios.get('/load/packages').then(res=>{
                this.paquetes = res.data;
            })
        },
        methods: {
            selectDestino: function (destino, checked) {
                if (checked){
                    this.destinosSeleccionados.push(destino);
                    console.log(destino);
                }else{
                    let index = this.destinosSeleccionados.indexOf(destino);
                    this.$delete(this.destinosSeleccionados, index);
                    console.log(index);
                }
            },
            selectCategory: function (categoria, checked) {
                if (checked){
                    this.categoriasSeleccionados.push(categoria);
                    console.log(categoria);
                }else{
                    let index = this.categoriasSeleccionados.indexOf(categoria);
                    this.$delete(this.categoriasSeleccionados, index);
                    console.log(index);
                }
            },
            selectTiempo: function (tiempo, checked) {
                if (checked){
                    this.tiemposSeleccionados = [];
                    this.tiemposSeleccionados.push(tiempo);
                    console.log(tiempo);
                }else{
                    let index = this.tiemposSeleccionados.indexOf(tiempo);
                    this.$delete(this.tiemposSeleccionados, index);
                    console.log(index);
                }
            },
            filterPackage: function () {
                // console.log('se ejecuta');
                // if(this.nota.nombre.trim() === '' || this.nota.descripcion.trim() === ''){
                //     alert('Debes completar todos los campos antes de guardar');
                //     return;
                // }
                let obj = {
                    destinoSelected: this.destinosSeleccionados,
                    categoriaSelected: this.categoriasSeleccionados,
                    tiempoSelected: this.tiemposSeleccionados
                };
                const self = this;
                this.loading = true;
                this.btnview = false;
                // const destinosNueva = this.destinosSeleccionados;
                // this.destinos = {nombre: '', descripcion: ''};
                axios.post('/agregar', obj)
                    .then((res) =>{
                        self.loading = false;
                        this.btnview = true;
                        const paquetesServidor = res.data;
                        // this.paquetes.push(destinosServidor);
                        // console.log(paquetesServidor);
                        // this.paquetes = [];
                        this.paquetes = paquetesServidor;
                        // this.paquetes.push(paquetesServidor);
                        // console.log(this.destinations);
                    });

                console.log(this.destinosSeleccionados);
                console.log(this.categoriasSeleccionados);
                console.log(this.tiemposSeleccionados);

            },
        },
    }
</script>
