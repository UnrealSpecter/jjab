<template>

    <div class="w-4/5 tablet-portrait:w-3/4 laptop:w-2/3 desktop:w-full">

        <form action="" method="post" class="flex flex-col justify-center items-center tablet-portrait:items-end">

            <!-- CSRF TOKEN -->
            <input type="hidden" name="_token" :value="csrf">

            <!-- EMAIL -->
            <input
                type="email"
                placeholder="email"
                class="text-input anton"
                data-emergence="hidden" data-animation="animated fadeInUp"
                @keydown="clearError('email')"
                v-model="data.email" name="data[email]"
                value="{ data.email }">

            <!-- EMAIL ERROR -->
            <p v-if="errors.email" class="w-full p-12 text-white shadow-md rounded-jjab bg-jjab-blue anton mb-10 flex-center text-2.5rem">
                <span class="fa fa-exclamation-circle mr-5 text-3rem"></span>Vul een geldig emailadres in.
            </p>

            <!-- CONTENT -->
            <textarea
                data-emergence="hidden"
                data-animation="animated fadeInUp"
                v-model="data.content"
                @keydown="clearError('content')"
                name="data[content]"
                value="{ data.content }"
                class="text-input anton h-100px tablet-portrait:h-200px" placeholder="stel je vraag!"></textarea>

            <!-- TEXT ERROR -->
            <p v-if="errors.content" class="w-full p-12 text-white shadow-md rounded-jjab bg-jjab-blue anton mb-10 flex-center text-2.5rem">
                <span class="fa fa-exclamation-circle mr-5 text-3rem"></span>Dit veld mag niet leeg zijn.
            </p>

            <!-- SUBMIT -->
            <input
                data-emergence="hidden"
                data-animation="animated fadeInUp"
                class="button purple anton"
                type="submit"
                value="help!"
                @click.prevent="submit()" >

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
            }
        },
        methods: {
            submit: function(){

                if(this.validate()){
                    this.send();
                }

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

                axios.post('/mail', {
                    email: this.data.email,
                    content: this.data.content
                })
                .then(function (response) {
                    if(response.data){
                        //success
                    }
                })
                .catch(function(error) {
                    //error
                });
            },
            clearError: function(key){
                this.errors[key] = "";
            }
        }
    }
</script>
