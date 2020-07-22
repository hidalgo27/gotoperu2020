<template>
    <div>
        <div class="position-absolute-top r-0">
            <div class="row no-gutters justify-content-end">
                <div class="col-2 text-center">
                    <div class="bg-warning clearfix rounded m-4 p-2 position-relative">
                        <img src="https://gotoperu-20.s3-us-west-1.amazonaws.com/free.png" alt="" class="w-100">
                        <p class="h5">Postponements</p>
                        <p class="small m-0">up to 9 days before arrival</p>
                        <p class="m-0">flexible terms</p>

                        <div class="position-absolute-bottom-sticker-1 position-b">
                            <a href="#" @click="dialogFormVisible = true">
                                <img src="https://gotoperu-20.s3-us-west-1.amazonaws.com/weekly.png" alt="" class="w-50 float-right">
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <el-dialog :visible.sync="dialogFormVisible">
            <div class="el-dialog__header mb-5 text-center">
                <img :src="'/images/logos/logo-gotoperu-black.png'" alt="logo gotoperu" class="mb-3">
                <p>Sign up here to receive emails filled with news, promotions, You can unsuscribe ay any time.</p>
            </div>
            <el-form :model="form">
                <el-form-item label="Email" :label-width="formLabelWidth">
                    <el-input v-model="form.email" autocomplete="off"></el-input>
                </el-form-item>
                <el-form-item label="Full Name" :label-width="formLabelWidth">
                    <el-input v-model="form.name" autocomplete="off"></el-input>
                </el-form-item>
                <el-form-item label="Zones" :label-width="formLabelWidth">
                    <el-select v-model="form.region" placeholder="Please select a zone">
                        <el-option label="Zone No.1" value="shanghai"></el-option>
                        <el-option label="Zone No.2" value="beijing"></el-option>
                    </el-select>
                </el-form-item>
            </el-form>
            <span slot="footer" class="dialog-footer">
                <el-button @click="dialogFormVisible = false">Cancel</el-button>
                <el-button type="primary" @click="dialogFormVisible = false">Confirm</el-button>
            </span>
        </el-dialog>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                dialogFormVisible: false,
                form: {
                    email: '',
                    name: '',
                    region: '',
                },
                formLabelWidth: '120px'
            }
        }
    }
</script>



