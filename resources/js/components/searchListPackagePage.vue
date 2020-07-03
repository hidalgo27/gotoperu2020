<template>
    <div class="col-12 col-sm-12 col-md-6 d-flex mb-4">
        <div class="w-100 shadow-sm">
            <div class="header-img-packages bx-img-destinohome position-relative">
                <div class="position-absolute-top">
                    <img :src="'images/descuentos/'+paquete_p.descuento+'.png'" alt="" class="w-25 float-right">
<!--                    <div class="box-offers-circle rounded-circle bg-g-dark clearfix text-center p-2">-->
<!--&lt;!&ndash;                        <span class="mt-3 d-block h4 font-weight-bold text-warning">25%<small class="d-block t-small-6 font-weight-bold">OFF</small></span>&ndash;&gt;-->
<!--                    </div>-->
                </div>
                <a :href="'paquetes/'+paquete_p.url"><img class="w-100" :src="paquete_p.imagen" alt=""></a>
                <div class="position-absolute-bottom rgba-black-gradient px-3 py-3">

                    <!--                        <span v-for="paquete_cat in paquete_category">-->
                    <!--                            <span v-if="paquete_cat.idpaquetes === paquete_p.id">-->
                    <!--                                {{paquete_cat.categoria.nombre}}-->
                    <!--                            </span>-->
                    <!--                        </span>-->

                    <!--                        <template v-for="paquete_destino in paquete_destinations">-->
                    <!--                            <template v-if="paquete_destino.idpaquetes === paquete_p.id">-->
                    <!--                                <small class="text-white">{{paquete_destino.destinos.nombre}},</small>-->
                    <!--                            </template>-->
                    <!--                        </template>-->

                    <div class="row no-gutters align-items-center">
                        <div class="col-auto">
                            <p class="font-weight-bold text-white h6 pr-2 m-0">{{ paquete_p.duracion }} Days</p>
                        </div>
                        <div class="col-auto">
                            <template v-for="precio in paquete_p.precio_paquetes">
                                <template v-if="precio.estrellas === 2">
                                    <template v-if="precio.precio_d > 0">
                                        <p class="font-weight-bold small text-white m-0"><sup class="small"><small><del>{{precio.precio_d}}</del></small></sup> ${{Math.round(precio.precio_d - ((precio.precio_d * paquete_p.descuento)/100))}}<small>USD</small></p>
                                    </template>
                                    <template v-else>
                                        <span class="text-g-yellow small font-weight-bold">Inquire</span>
                                    </template>
                                </template>
                            </template>
                        </div>
                    </div>
                    <h5 class="text-white h6 font-weight-bold m-0">{{ paquete_p.titulo }}</h5>

                </div>
            </div>
            <!--            <div class="card-body">-->
            <!--                <a href="" class="text-g-green font-weight-bold d-block h5">{{ paquete_p.titulo }}</a>-->
            <!--                <span class="font-weight-normal text-secondary">-->
            <!--                    <i class="fa fa-map-marker-alt"></i>-->

            <!--                </span>-->
            <!--            </div>-->
            <!--            <div class="card-footer bg-white">-->
            <!--                <div class="row align-items-center">-->
            <!--                    <div class="col">-->
            <!--                        <p class="font-weight-bold h5 m-0">{{ paquete_p.duracion }} Días</p>-->
            <!--                    </div>-->
            <!--                    <div class="col-auto">-->
            <!--                        <template v-for="precio in paquete_p.precio_paquetes">-->
            <!--                            <template v-if="precio.estrellas === 2">-->
            <!--                                <template v-if="precio.precio_d > 0">-->
            <!--                                    <p class="font-weight-bold text-primary h5 m-0"><sup class="small"><small>desde</small></sup> ${{precio.precio_d}}<small>USD</small></p>-->
            <!--                                </template>-->
            <!--                                <template v-else>-->
            <!--                                    <span class="text-danger font-weight-bold">Consulte</span>-->
            <!--                                </template>-->
            <!--                            </template>-->
            <!--                        </template>-->
            <!--                    </div>-->
            <!--                </div>-->
            <!--            </div>-->
        </div>
    </div>
</template>

<script>
    export default {
        props: ['paquete_p', 'paquete_destinations','paquete_category'],
        data() {
            return {
                search: [],
                modoEditar: false,
                search: {nombre: '', descripcion: ''},
                // destinos: [paquete.paquetes_destinos]
            }
        },
    }
</script>
