<template>

    <div class="w-4/5 tablet-portrait:w-3/4 laptop:w-2/3 desktop:w-full">

        <form action="/mail" method="post" class="flex flex-col justify-center items-center tablet-portrait:items-end">

            <!-- CSRF TOKEN -->
            <input type="hidden" name="_token" :value="csrf">

            <!-- EMAIL -->
            <input
                type="email"
                placeholder="email"
                class="invisible text-input anton"
                data-emergence="hidden" data-animation="animated fadeInUp"
                @keydown="clearError('email')"
                v-model="data.email" name="data[email]"
                value="{ data.email }">

            <!-- EMAIL ERROR -->
            <p v-if="errors.email" class="text-error anton">
                <span class="fa fa-exclamation-circle error-icon"></span>Vul een geldig emailadres in.
            </p>

            <!-- CONTENT -->
            <textarea
                data-emergence="hidden"
                data-animation="animated fadeInUp"
                v-model="data.content"
                @keydown="clearError('content')"
                name="data[content]"
                value="{ data.content }"
                class="invisible text-input anton h-100px tablet-portrait:h-200px" placeholder="stel je vraag!"></textarea>

            <!-- TEXT ERROR -->
            <p v-if="errors.content" class="text-error anton">
                <span class="fa fa-exclamation-circle error-icon"></span>Dit veld mag niet leeg zijn.
            </p>

            <!-- SUBMIT -->
            <div class="relative w-full flex flex-row justify-end items-center text-jjab-purple">

                <p v-if="mailSent" class="text-error anton">
                    <i class="fas fa-check mr-5"></i> hulp is onderweg!
                </p>

                <div
                    v-if="!mailSent"
                    id="submit-button"
                    data-emergence="hidden"
                    data-animation="animated fadeInUp"
                    class="invisible button purple anton"
                    @click.prevent="submit()">

                    <span v-if="!mailSending">help!</span>

                    <div v-if="mailSending" class="flex flex-row flex-no-wrap">
                        sending
                        <div class="animated bounce slow infinite delay-100ms">.</div>
                        <div class="animated bounce slow infinite delay-200ms">.</div>
                        <div class="animated bounce slow infinite delay-300ms">.</div>
                    </div>

                </div>

            </div>

        </form>

    </div>

</template>

<script>
    export default {
        data: function(){
            return {
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                data: {
                    email: '',
                    content: '',
                },
                errors: {
                },
                mailSent: false,
                mailSending: false,
            }
        },
        methods: {
            submit: function(){

                if(this.validate()){
                    this.send();
                }

            },
            updateMailStatus(){
                this.mailSent = true;
            },
            validate: function(){

                this.errors = {};

                for (var property in this.data) {
                    if (this.data[property] === "") {
                        this.errors[property] = property + "";
                    }
                }

                var errorCount = Object.keys(this.errors).length;

                return ( errorCount >= 1 ? false : true);

            },
            send: function(){
                this.mailSending = true;
                const vm = this;

                axios.post('/mail', {
                    email: this.data.email,
                    content: this.data.content
                })
                .then(function (response) {
                    vm.mailSent = true;
                })
                .catch(function(error) {
                });
            },
            clearError: function(key){
                this.errors[key] = "";
            }
        }
    }
</script>
