<template>

    <v-card>
        <v-navigation-drawer
            permanent
            expand-on-hover
        >
            <v-list>
                <v-list-item class="px-2">
                    <v-list-item-avatar>
                        <v-img src="https://randomuser.me/api/portraits/women/85.jpg"></v-img>
                    </v-list-item-avatar>
                </v-list-item>

                <v-list-item link>
                    <v-list-item-content>
                        <v-list-item-title class="title">Sandra Adams</v-list-item-title>
                        <v-list-item-subtitle>sandra_a88@gmail.com</v-list-item-subtitle>
                    </v-list-item-content>
                </v-list-item>
            </v-list>

            <v-divider></v-divider>

            <v-list
                nav
                dense
            >
                <v-list-item link>
                    <v-list-item-icon>
                        <v-icon>mdi-folder</v-icon>
                    </v-list-item-icon>
                    <v-list-item-title>My Files</v-list-item-title>
                </v-list-item>
                <v-list-item link>
                    <v-list-item-icon>
                        <v-icon>mdi-account-multiple</v-icon>
                    </v-list-item-icon>
                    <v-list-item-title>Shared with me</v-list-item-title>
                </v-list-item>
                <v-list-item link>
                    <v-list-item-icon>
                        <v-icon>mdi-star</v-icon>
                    </v-list-item-icon>
                    <v-list-item-title>Starred</v-list-item-title>
                </v-list-item>
            </v-list>
        </v-navigation-drawer>
    </v-card>

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
