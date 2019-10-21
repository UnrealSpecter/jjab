<template>

    <section data-emergence="hidden" class="w-1/2 h-full flex flex-col justify-center items-center px-20 py-20">
        <h1 style="letter-spacing: 5px" class="aller-display uppercase tracking-wide text-3rem mb-5 text-white">Ask us anything!</h1>
        <form method="POST" action="" id="contact-form" class="bg-formi-blue w-full mb-5 px-10 pt-10 pb-5">
            <input class="mb-3 text-1.25rem bg-formi-yellow shadow-md text-white source-sans w-full py-5 px-10 leading-none tracking-wide" name="name" placeholder="Name" type="text" required>
            <input class="mb-3 text-1.25rem bg-formi-yellow shadow-md text-white source-sans w-full py-5 px-10 leading-none tracking-wide" name="subject" placeholder="Subject" type="text" required>
            <input class="mb-3 text-1.25rem bg-formi-yellow shadow-md text-white source-sans w-full py-5 px-10 leading-none tracking-wide" name="email" placeholder="Email" type="email" required>
            <textarea class="mb-3 h-32 text-formi-blue text-1.25rem bg-white shadow-md source-sans w-full py-5 px-10 leading-none tracking-wide" name="message" placeholder="Message" required></textarea>
            <!-- <div id="privacy-wrapper" class="checkmark-wrapper century-gothic-regular flex items-center justify-center text-xl px-4">
                <a target="_blank" class="no-underline" href="">privacy policy</a>
            </div> -->
            <button id="contact-submit" type="submit" style="letter-spacing: 2px;" class="mb-3 text-1.25rem bg-formi-yellow shadow-md text-white source-sans w-full py-5 px-10 leading-none tracking-wide">send</button>
        </form>
        <div class="flex flex-row w-full">
            <formi-button text="call us" page="how-do-i-apply-it" class="mr-5 w-1/2"></formi-button>
            <formi-button text="email" page="buy-now" :is-yellow="true" class="w-1/2"></formi-button>
        </div>
    </section>

</template>

<script>
    export default {
        props: []
    }
</script>
