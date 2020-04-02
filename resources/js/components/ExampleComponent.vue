<template>
    <div class="rgba-white-9 p-3">

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
            <div class="col">
                <el-select
                    v-model="category"
                    multiple
                    collapse-tags
                    class="w-100"
                    placeholder="Estilo de Viaje">
                    <el-option
                        v-for="item in options_category"
                        :key="item.value"
                        :label="item.label"
                        :value="item.value">
                    </el-option>
                </el-select>
            </div>
            <div class="col">
                <el-input placeholder="Numero Pasajeros" type="number" v-model="pasajeros"></el-input>
            </div>
            <div class="col">
                <el-button type="warning" class="w-100 font-weight-bold font-size-extra-large" icon="el-icon-edit" @click="dialogVisible = true">Crear mi viaje ahora</el-button>
            </div>

            <el-dialog
                :visible.sync="dialogVisible"
                width="40%"
                top="10vh"
                :show-close="false"
                :before-close="handleClose">
                <div class="row">
                    <div class="col-12 text-center">
                        <h4 class="font-weight-bold">¡Casi terminamos!</h4>
                        <p>Necesitamos un poco más de información para crear su itinerario:</p>
                    </div>
                    <div class="col-12">
                        <el-input size="small" placeholder="Nombre Completo" v-model="name" prefix-icon="el-icon-user"></el-input>
                    </div>
                    <div class="col-12 my-3">
                        <el-input size="small" placeholder="Email" v-model="email" prefix-icon="el-icon-date"></el-input>
                    </div>
                    <div class="col-12">
                        <vue-tel-input v-model="phone"></vue-tel-input>
                    </div>
                    <div class="col-6 my-3">
                        <el-input size="small" type="number" min="1" placeholder="Duración de viaje en días" v-model="duration" prefix-icon="el-icon-sunny"></el-input>
                    </div>
                    <div class="col-6 my-3">
                        <el-date-picker
                            v-model="date"
                            type="date"
                            size="small"
                            placeholder="Fecha de Viaje"
                            class="w-100"
                            :picker-options="pickerOptions">
                        </el-date-picker>
                    </div>
                    <div class="col-12">
                        <el-select
                            v-model="plan"
                            collapse-tags
                            size="small"
                            class="w-100"
                            placeholder="¿En que etapa de panificación estas?">
                            <el-option
                                v-for="item in options_plan"
                                :key="item.value"
                                :label="item.label"
                                :value="item.value">
                            </el-option>
                        </el-select>
                    </div>
                    <div class="col mt-3">
                        <el-input
                            type="textarea"
                            autosize
                            prefix-icon="el-icon-sunny"
                            :autosize="{ minRows: 2, maxRows: 4}"
                            placeholder="¿Alguna nota o solicitud especial?"
                            v-model="commend">
                        </el-input>
                    </div>
                </div>
                <span slot="footer" class="dialog-footer">
                    <el-button @click="dialogVisible = false">Cancel</el-button>
                    <el-button type="success" @click="dialogVisible = false">Enviar</el-button>
                    </span>
            </el-dialog>
        </div>

    </div>
</template>

<script>
    export default {
        data() {
            return {
                options_destino: [
                    { value: 'Cusco', label: 'Cusco'},
                    { value: 'Arequipa', label: 'Arequipa'},
                    { value: 'Machu Picchu', label: 'Machu Picchu'},
                    { value: 'Puno', label: 'Puno'},
                    { value: 'Lima', label: 'Lima'}
                ],
                options_category: [
                    { value: 'Familiar', label: 'Familiar'},
                    { value: 'Aventura', label: 'Aventura'},
                    { value: 'Tradicional', label: 'Tradicional'},
                    { value: 'Lujo', label: 'Lujo'},
                    { value: 'Clásico', label: 'Clásico'}
                ],
                options_plan: [
                    {value: 'Todavía pensando', label: 'Todavía pensando'},
                    {value: 'Vieje seguro pero no se aun los destinos', label: 'Vieje seguro pero no se aun los destinos'},
                    {value: 'Quiero reservar un viaje', label: 'Quiero reservar un viaje'}
                ],
                category: [],
                destino: [],
                pasajeros: '',
                name:'',
                email:'',
                phone:'',
                duration:'',
                plan: '',
                date:'',
                commend:'',
                dialogVisible: false,
                pickerOptions: {
                    disabledDate(time) {
                        return time.getTime() < Date.now();
                    }
                },
            }
        },
        methods: {
            handleClose(done) {
                this.$confirm('Are you sure to close this dialog?')
                    .then(_ => {
                        done();
                    })
                    .catch(_ => {});
            }
        }
    }
</script>
<style>
    .el-tag {
        background-color: #ecf5ff !important;
        border-color: #d9ecff !important;
        color: #409eff !important;
    }
    .el-icon-close {
        background-color: transparent !important;
        color: #409eff !important;
    }
    .el-icon-close:hover {
        background-color: #409eff !important;
        color: white !important;
    }
    .el-dialog__header {
        padding: 0 !important;
        padding-bottom: 0 !important;
    }
</style>
