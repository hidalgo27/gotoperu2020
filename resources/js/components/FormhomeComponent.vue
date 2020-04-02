<template>

    <form class="white">
        <v-container class="py-0">
            <v-row class="box-form py-0">
                <v-col class="py-0">
                    <v-select
                        v-model="value"
                        :items="items"
                        label="Where"
                        multiple
                        outline
                        clearable
                    >
                        <template v-slot:selection="{ item, index }">
                            <v-chip v-if="index === 0" small>
                                <span>{{ item }}</span>
                            </v-chip>
                            <span
                                v-if="index === 1"
                                class="grey--text caption"
                            >(+{{ value.length - 1 }} others)</span>
                        </template>
                    </v-select>
                </v-col>
                <v-col class="py-0">
                    <v-select
                        v-model="value"
                        :items="items"
                        label="Select Item"
                        multiple
                        clearable
                    >
                        <template v-slot:selection="{ item, index }">
                            <v-chip v-if="index === 0" small>
                                <span>{{ item }}</span>
                            </v-chip>
                            <span
                                v-if="index === 1"
                                class="grey--text caption"
                            >(+{{ value.length - 1 }} others)</span>
                        </template>
                    </v-select>
                </v-col>
                <v-col class="py-0">
                    <v-combobox
                        v-model="chips"
                        :items="items"
                        chips
                        clearable
                        label="Your favorite hobbies"
                        multiple

                    >
                        <template v-slot:selection="{ attrs, item, select, selected }">
                            <v-chip
                                v-bind="attrs"
                                :input-value="selected"
                                close
                                small
                                @click="select"
                                @click:close="remove(item)"
                            >
                                <strong>{{ item }}</strong>&nbsp;
                                <span>(interest)</span>
                            </v-chip>
                        </template>
                    </v-combobox>
                </v-col>
                <v-col cols="auto">
                    <v-btn class="mr-4 font-weight-bold white--text" tile color="orange lighten-1" @click="submit">Create My Trip Now</v-btn>
                </v-col>
            </v-row>
        </v-container>

    </form>

</template>


<script>
    import { validationMixin } from 'vuelidate'
    import { required, maxLength, email } from 'vuelidate/lib/validators'

    export default {
        mixins: [validationMixin],

        validations: {
            name: { required, maxLength: maxLength(10) },
            email: { required, email },
            select: { required },
            checkbox: {
                checked (val) {
                    return val
                },
            },
        },

        data: () => ({
            name: '',
            email: '',
            select: null,
            items: [
                'Item 1',
                'Item 2',
                'Item 3',
                'Item 4',
            ],
            checkbox: false,
            chips: '',
        }),

        computed: {
            checkboxErrors () {
                const errors = []
                if (!this.$v.checkbox.$dirty) return errors
                !this.$v.checkbox.checked && errors.push('You must agree to continue!')
                return errors
            },
            selectErrors () {
                const errors = []
                if (!this.$v.select.$dirty) return errors
                !this.$v.select.required && errors.push('Item is required')
                return errors
            },
            nameErrors () {
                const errors = []
                if (!this.$v.name.$dirty) return errors
                !this.$v.name.maxLength && errors.push('Name must be at most 10 characters long')
                !this.$v.name.required && errors.push('Name is required.')
                return errors
            },
            emailErrors () {
                const errors = []
                if (!this.$v.email.$dirty) return errors
                !this.$v.email.email && errors.push('Must be valid e-mail')
                !this.$v.email.required && errors.push('E-mail is required')
                return errors
            },
        },

        methods: {
            submit () {
                this.$v.$touch()
            },
            clear () {
                this.$v.$reset()
                this.name = ''
                this.email = ''
                this.select = null
                this.checkbox = false
            },
            remove (item) {
                this.chips.splice(this.chips.indexOf(item), 1)
                this.chips = [...this.chips]
            },
        },
    }
</script>

<style>
    .v-select.v-select--chips .v-select__selections{
        min-height: 32px;
    }
</style>
