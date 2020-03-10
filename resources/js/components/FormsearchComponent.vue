<template>
    <v-app>
        <div>
            <v-form class="position-relative">
                <v-row>
                    <v-col class="text-r">
                        <h4 class="font-weight-bold">Encuentra tu paquete ideal</h4>
                    </v-col>
                </v-row>
                <v-row>
                    <v-col>

                        <v-select
                            v-model="destination"
                            :items="destinations"
                            label="Destinos en Perú"
                            multiple
                            required
                            chips
                            top :offset-x="offset"
                        >
                            <template v-slot:selection="{ item, index }">
                                <v-chip v-if="index === 0">
                                    <span>{{ item }}</span>
                                </v-chip>
                                <span
                                    v-if="index === 1"
                                    class="grey--text caption"
                                >(+{{ destination.length - 1 }} others)</span>
                            </template>
                        </v-select>
                    </v-col>
                    <v-col>
                        <v-text-field label="Duración del viaje en días." required></v-text-field>
                    </v-col>
                    <v-col sm="auto">
                        <v-btn large tile class="font-weight-bold cyan text-white" tile><v-icon>mdi-magnify</v-icon> Encuentra tu paquete</v-btn>
                    </v-col>
                </v-row>
            </v-form>
        </div>
    </v-app>
</template>

<script>
    export default {
        data () {
            return {
                tab: null,
                destination: '',
                destinations: [
                    'Arequipa', 'Lima', 'Cusco', 'Puno', 'Machu Picchu'
                ],
            }
        },
        offset: true,
    }
</script>

<style scoped>

</style>
