<template>

    <div>
        <el-tabs v-model="activeName" @tab-click="handleClick" stretch="true">
            <el-tab-pane label="Paquetes de Viajes" name="first">
                <div class="row mt-4">
                    <div class="col py-0">
                        <h4 class="font-weight-bold mb-0">Encuentra tu paquete ideal</h4>
                    </div>
                </div>
                <div class="row justify-content-center my-4">
                    <div class="col-8">
                        <div class="row">
                            <div class="col">
                                <el-select
                                    v-model="destino"
                                    multiple
                                    collapse-tags
                                    class="w-100"
                                    type="danger"
                                    placeholder="¿Su destino en Perú?">
                                    <el-option
                                        v-for="item in options_destino"
                                        :key="item.value"
                                        :label="item.label"
                                        :value="item.value">
                                    </el-option>
                                </el-select>
                            </div>
                            <div class="col-auto">
                                <el-select
                                    v-model="duration"
                                    collapse-tags
                                    class="w-100"
                                    type="danger"
                                    placeholder="Longitud de viaje en días">
                                    <el-option
                                        v-for="item in options_duration"
                                        :key="item.value"
                                        :label="item.label"
                                        :value="item.value">
                                        <span style="float: left font-weight:bold">{{ item.value }}</span>
                                        <span style="float: right; color: #8492a6; font-size: 13px">días</span>
                                    </el-option>
                                </el-select>
                            </div>
                            <div class="col-auto">
                                <el-button type="primary" class="font-weight-bold font-size-extra-large" icon="el-icon-search">Buscar mi paquete de viaje</el-button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4">
                        <el-card :body-style="{ padding: '0px' }">
                            <div class="position-relative">
                                <img src="http://gotoperu-com.s3-us-west-1.amazonaws.com/destinations/1580146287030ballestas-island-and-paracas_1580146290.jpg" class="image w-100">
                                <div class="position-absolute-bottom p-2 rgba-white-7">
                                    <span class="time">
                                        <i class="el-icon-map-location"></i>
                                        Machu Picchu, Cusco, Lima, Puno
                                    </span>
                                </div>
                            </div>
                            <div style="padding: 14px;">
                                <span class="t-corrido py-2 h5 d-block">Machu picchu classic</span>
                                <div class="bottom clearfix">
                                    <span class="time float-left">5 days -> desde <span class="text-d-yellow font-weight-bold"><sup>$</sup>500usd</span></span>
                                    <el-button type="text" class="button stretched-link">Ver detalle</el-button>
                                </div>
                            </div>
                        </el-card>
                    </div>
                    <div class="col-4">
                        <el-card :body-style="{ padding: '0px' }">
                            <div class="position-relative">
                                <img src="http://gotoperu-com.s3-us-west-1.amazonaws.com/destinations/1580146340988puno-and-lake-titicaca_1580146344.jpg" class="image w-100">
                                <div class="position-absolute-bottom p-2 rgba-white-7">
                                    <span class="time">
                                        <i class="el-icon-map-location"></i>
                                        Machu Picchu, Cusco, Lima, Puno
                                    </span>
                                </div>
                            </div>
                            <div style="padding: 14px;">
                                <span class="t-corrido py-2 h5 d-block">Titicaca y sus encantos</span>
                                <div class="bottom clearfix">
                                    <span class="time float-left">5 days -> desde <span class="text-d-yellow font-weight-bold"><sup>$</sup>500usd</span></span>
                                    <el-button type="text" class="button stretched-link">Ver detalle</el-button>
                                </div>
                            </div>
                        </el-card>
                    </div>
                    <div class="col-4">
                        <el-card :body-style="{ padding: '0px' }">
                            <div class="position-relative">
                                <img src="http://gotoperu-com.s3-us-west-1.amazonaws.com/destinations/1580146362450rainbow-mountain_1580146364.jpg" class="image w-100">
                                <div class="position-absolute-bottom p-2 rgba-white-7">
                                    <span class="time">
                                        <i class="el-icon-map-location"></i>
                                        Machu Picchu, Cusco, Lima, Puno
                                    </span>
                                </div>
                            </div>
                            <div style="padding: 14px;">
                                <span class="t-corrido py-2 h5 d-block">Montaña de 7 colores</span>
                                <div class="bottom clearfix">
                                    <span class="time float-left">5 days -> desde <span class="text-d-yellow font-weight-bold"><sup>$</sup>500usd</span></span>
                                    <el-button type="text" class="button stretched-link">Ver detalle</el-button>
                                </div>
                            </div>
                        </el-card>
                    </div>
                </div>
                <div class="row my-4">
                    <div class="col">
                        <el-divider content-position="right">
                            <el-link type="primary" class="text-decoration-none" href="#">Ver más paquetes <i class="el-icon-link el-icon--right"></i> </el-link>
                        </el-divider>
                    </div>
                </div>
            </el-tab-pane>
            <el-tab-pane label="Tekking en Perú" name="second">
                <div class="row my-4">
                    <div class="col text-center">
                        <h2 class="t-corrido font-weight-bold">Trekking en Perú</h2>
                    </div>
                </div>
                <div class="row mb-5">
                    <div class="col-4">
                        <el-card :body-style="{ padding: '0px' }">
                            <div class="position-relative">
                                <img src="http://gotoperu-com.s3-us-west-1.amazonaws.com/destinations/1580146287030ballestas-island-and-paracas_1580146290.jpg" class="image w-100">
                                <div class="position-absolute-bottom p-2 rgba-white-9">
                                    <span class="time">
<!--                                        <i class="el-icon-map-location"></i>-->
                                        <!--                                        Machu Picchu, Cusco, Lima, Puno-->
                                        <span class="t-corrido font-weight-bold h5 d-block"><span class="text-info">5 days</span> Machu picchu classic</span>
                                    </span>
                                </div>
                            </div>
                            <div style="padding: 14px;">
                                <!--                                <span class="t-corrido py-2 h5 d-block">Machu picchu classic</span>-->
                                <div class="bottom clearfix">
                                    <span class="time float-left font-weight-bold"><span class="small font-weight-bold">DESDE</span> <span class="text-d-yellow font-weight-bold"><sup>$</sup>500usd</span></span>
                                    <el-button type="text" class="button stretched-link">Ver detalle</el-button>
                                </div>
                            </div>
                        </el-card>
                    </div>
                </div>
            </el-tab-pane>
            <el-tab-pane label="Como Reservar" name="third">Como Reservar</el-tab-pane>
        </el-tabs>
    </div>


</template>

<script>
    export default {
        data () {
            return {
                options_destino: [
                    { value: 'Cusco', label: 'Cusco'},
                    { value: 'Arequipa', label: 'Arequipa'},
                    { value: 'Machu Picchu', label: 'Machu Picchu'},
                    { value: 'Puno', label: 'Puno'},
                    { value: 'Lima', label: 'Lima'}
                ],
                options_duration: [
                    { value: '3-5', label: '3-5 días'},
                    { value: '6-8', label: '6-8 días'},
                    { value: '9-12', label: '9-12 días'},
                    { value: '13-16', label: '13-16 días'},
                    { value: '16+', label: '16+ días'}
                ],
                destino: '',
                duration: '',
                activeName: 'first'
            }
        },
        methods: {
            handleClick(tab, event) {
                console.log(tab, event);
            }
        }
    }
</script>
<style>
    .v-card--reveal {
        align-items: center;
        bottom: 0;
        justify-content: center;
        opacity: .5;
        position: absolute;
        width: 100%;
    }
    .menuable__content__active:focus{
        display: none;
    }
    .el-tabs__item.is-active{
        color: white !important;
        font-weight: bold;
        font-size: 18px;
    }
    .el-tabs__nav{
        background: #54575e;
    }
    .el-tabs__active-bar{
        background: #ffa000;
        height: 3px !important;
    }
    .el-tabs__item:hover {
        color: white !important;
    }
    .el-tabs__item{
        color: #d9dadc;
        font-size: 16px;
    }

    .time {
        font-size: 13px;
        color: #6d6d6d;
    }

    .bottom {
        margin-top: 13px;
        line-height: 12px;
    }

    .button {
        padding: 0;
        float: right;
    }

    .clearfix:before,
    .clearfix:after {
        display: table;
        content: "";
    }

    .clearfix:after {
        clear: both
    }
</style>
