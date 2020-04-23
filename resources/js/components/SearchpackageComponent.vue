<template>


        <div class="row">
            <div class="col">
                <el-select
                    v-model="destino"
                    multiple
                    collapse-tags
                    class="w-100"
                    size="small"
                    placeholder="Destinations">
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
                    size="small"
                    placeholder="Category">
                    <el-option
                        v-for="item in options_category"
                        :key="item.value"
                        :label="item.label"
                        :value="item.value">
                    </el-option>
                </el-select>
            </div>

<!--            <div class="col">-->
<!--                <el-input placeholder="Numero Días" size="mini" type="number" v-model="pasajeros"></el-input>-->
<!--            </div>-->
<!--            <div class="col">-->
<!--                <el-button type="warning" size="mini" class="w-100 font-weight-bold font-size-extra-large" icon="el-icon-edit" @click="dialogVisible = true">Crear mi viaje ahora</el-button>-->
<!--            </div>-->

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
