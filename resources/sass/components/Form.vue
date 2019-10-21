<template>

    <form method="post" action="/orders/checkout" class="bg-white p-5 tablet-portrait:p-10 shadow-md w-11/12 tablet-landscape:w-2/3 laptop:w-1/2 desktop:w-2/5">

        <!-- CSRF TOKEN -->
        <input type="hidden" name="_token" :value="csrf">

        <!-- TOTAL AMOUNT -->
        <div class="flex flex-row justify-between">
            <h1 class="dinpro-black text-2rem tablet-portrait:text-4rem text-formi-blue h-full leading-none text-center w-full">Choose a product</h1>
        </div>

        <!-- PRODUCT SELECTION -->
        <div class="form-group mt-12 laptop:mt-10 flex flex-col items-center">

            <!-- PRODUCT NAME -->
            <div class="mb-2 w-full dinpro-black text-2rem tablet-portrait:text-3rem text-formi-blue text-center leading-none">{{ selectedProduct.name }}</div>

            <!-- PRODUCT OPTIONS -->
            <div class="w-full flex flex-col tablet-portrait:flex-row">
                <div
                    v-for="product in products"
                    v-bind="product"
                    @click="setSelectedProduct(product)"
                    :class="[ product.isSelected ? 'bg-formi-yellow shadow-lg' : 'bg-formi-blue shadow-none']"
                    class="relative cursor-pointer hover:bg-formi-yellow h-full tablet-portrait:w-1/3 mb-5 tablet-portrait:m-2 p-5 latop:p-10 text-white flex flex-row tablet-portrait:flex-col items-center justify-center">
                        <div class="whitespace-no-wrap text-1.5rem">{{ product.coverage }} {{ product.coverage_format}}</div>
                        <div class="whitespace-no-wrap w-full tablet-portrait:my-2 text-1.5rem tablet-portrait:text-2.5rem laptop:text-3rem text-center source-sans font-bold leading-none"> &dollar;{{ product.cost }}</div>
                        <img v-if="product.isSelected" class="whitespace-no-wrap h-10" src="/assets/svg-icons/verify-sign.svg">
                </div>
            </div>

            <!-- PRODUCT DESCRIPTION  -->
            <p class="w-full text-1.5rem text-formi-blue text-center h-20 flex-center" v-bind="selectedProduct">{{ selectedProduct.description }}</p>

            <div class="flex flex-row justify-between mt-2">
                <h1 class="dinpro-black text-1.5rem tablet-portrait:text-3rem text-formi-blue text-center w-full">Order Summary</h1>
            </div>

            <!-- SHIPPING & TOTAL -->
            <div class="flex flex-col my-5 w-full">
                <div class="flex flex-row justify-between mb-1">
                    <h1 class="dinpro-black text-1rem tablet-portrait:text-1.5rem text-formi-blue h-full leading-none">Unit cost:</h1>
                    <span class="aller-display h-full flex flex-row justify-start items-start leading-none text-1rem tablet-portrait:text-1.5rem text-formi-blue">&dollar; {{ selectedProduct.cost }}</span>
                </div>
                <div class="flex flex-row justify-between mb-1">
                    <h1 class="whitespace-no-wrap dinpro-black text-1rem tablet-portrait:text-1.5rem text-formi-blue h-full leading-none">Shipping cost:</h1>
                    <span class="whitespace-no-wrap aller-display h-full flex flex-row justify-start items-start leading-none text-1rem tablet-portrait:text-1.5rem text-formi-blue">+ &dollar;{{ shippingCost }}</span>
                </div>
                <div class="flex flex-row justify-between mb-2">
                    <h1 class="whitespace-no-wrap dinpro-black text-1rem tablet-portrait:text-1.5rem text-formi-blue h-full leading-none">VAT 21%:</h1>
                    <span class="whitespace-no-wrap aller-display h-full flex flex-row justify-start items-start leading-none text-1rem tablet-portrait:text-1.5rem text-formi-blue border-b-4 border-formi-blue pb-1">+ &dollar;{{ vatAmount }}</span>
                </div>
                <div class="flex flex-row justify-between mt-2">
                    <h1 class="whitespace-no-wrap dinpro-black text-1.25rem tablet-portrait:text-2rem text-formi-blue h-full leading-none">Total amount:</h1>
                    <span class=" whitespace-no-wrap aller-display h-full flex flex-row justify-start items-start leading-none text-1.25rem tablet-portrait:text-2rem text-formi-blue">&dollar;{{ amount }}</span>
                </div>
            </div>
        </div>

        <div id="billingdata-wrapper">

            <!-- PAYMENT DETAILS -->
            <div class="flex flex-row justify-between mt-2 laptop:mt-20">
                <h1 class="dinpro-black text-1.5rem tablet-portrait:text-3rem text-formi-blue text-center w-full">Payment Details</h1>
            </div>

            <!-- TITLE -->
            <div class="form-group">
                <label for="method" class="text-formi-blue source-sans text-1.25rem">Choose a title</label>
                <select id="method"
                        class="form-control bg-transparent border-2 border-formi-blue text-formi-yellow h-16 w-full px-5 text-1.5rem"
                        v-model="billingData.selectedTitle">
                    <option v-for="title in titles">{{ title }}</option>
                </select>
            </div>

            <!-- givenName -->
            <div class="form-group">
                <label for="givenName" class="text-formi-blue source-sans text-1.25rem">Given name</label>
                <input type="text"
                       id="givenName"
                       @change="clearError('billingData', 'givenName')"
                       class="form-control bg-transparent border-2 border-formi-blue text-formi-yellow h-16 w-full px-5 text-1.5rem"
                       v-model="billingData.givenName"
                       name="billingData[givenName]"
                       value="{ billingData.givenName }">
               <div v-if="errors.billingData.givenName" v-model="errors" class="h-16 flex flex-row justify-start items-center capitalized shadow-md bg-red-600 text-1rem tablet-portrait:text-1.25rem p-4 text-white">
                   <img src="/assets/svg-icons/error.svg" class="h-full mr-4"> {{ errors.billingData.givenName }}
               </div>
            </div>

            <!-- familyName -->
            <div class="form-group">
                <label for="familyName" class="text-formi-blue source-sans text-1.25rem">Family name</label>
                <input type="text"
                       id="familyName"
                       @change="clearError('billingData', 'familyName')"
                       class="form-control border-formi-blue bg-transparent border-2 text-formi-yellow h-16 w-full px-5 text-1.5rem"
                       v-model="billingData.familyName"
                       name="billingData[familyName]"
                       value="{ billingData.familyName }">
               <div v-if="errors.billingData.familyName" v-model="errors" class="h-16 flex flex-row justify-start items-center capitalized shadow-md bg-red-600 text-1rem tablet-portrait:text-1.25rem p-4 text-white">
                   <img src="/assets/svg-icons/error.svg" class="h-full mr-4"> {{ errors.billingData.familyName }}
               </div>
            </div>

            <!-- STREETADDRESS1 -->
            <div class="form-group">
                <label for="streetAddress1" class="text-formi-blue source-sans text-1.25rem">Street address</label>
                <input type="text"
                id="streetAddress1"
                @change="clearError('billingData', 'streetAddress1')"
                class="form-control bg-transparent border-2 border-formi-blue text-formi-yellow h-16 w-full px-5 text-1.5rem"
                v-model="billingData.streetAddress1"
                name="billingData[streetAddress1]"
                value="{ billingData.streetAddress1 }">
                <div v-if="errors.billingData.streetAddress1" v-model="errors" class="h-16 flex flex-row justify-start items-center capitalized shadow-md bg-red-600 text-1rem tablet-portrait:text-1.25rem p-4 text-white">
                    <img src="/assets/svg-icons/error.svg" class="h-full mr-4"> {{ errors.billingData.streetAddress1 }}
                </div>
            </div>

            <!-- STREETADDRESS2 -->
            <div class="form-group">
                <label for="streetAddress2" class="text-formi-blue source-sans text-1.25rem">Additional street address</label>
                <input type="text"
                id="streetAddress2"
                class="form-control bg-transparent border-2 border-formi-blue text-formi-yellow h-16 w-full px-5 text-1.5rem"
                v-model="billingData.streetAddress2"
                name="billingData[streetAddress2]"
                value="{ billingData.streetAddress2 }">
            </div>

            <!-- CITY -->
            <div class="form-group">
                <label for="city" class="text-formi-blue source-sans text-1.25rem">City</label>
                <input type="text"
                       id="city"
                       @change="clearError('billingData', 'city')"
                       class="form-control bg-transparent border-2 border-formi-blue text-formi-yellow h-16 w-full px-5 text-1.5rem"
                       v-model="billingData.city"
                       name="billingData[city]"
                       value="{ billingData.city }">
               <div v-if="errors.billingData.city" v-model="errors" class="h-16 flex flex-row justify-start items-center capitalized shadow-md bg-red-600 text-1rem tablet-portrait:text-1.25rem p-4 text-white">
                   <img src="/assets/svg-icons/error.svg" class="h-full mr-4"> {{ errors.billingData.city }}
               </div>
            </div>

            <!-- STATE -->
            <div class="form-group">
                <label for="method" class="text-formi-blue source-sans text-1.25rem">State</label>
                <select id="method"
                        class="form-control bg-transparent border-2 border-formi-blue text-formi-yellow h-16 w-full px-5 text-1.5rem"
                        v-model="billingData.selectedState">
                    <option v-for="state in states">{{ state.name }}</option>
                </select>
            </div>

            <!-- ZIP CODE -->
            <div class="form-group">
                <label for="zipCode" class="text-formi-blue source-sans text-1.25rem">Postalcode</label>
                <input type="text"
                       id="zipCode"
                       @change="clearError('billingData', 'zipCode')"
                       class="form-control bg-transparent border-2 border-formi-blue text-formi-yellow h-16 w-full px-5 text-1.5rem"
                       v-model="billingData.zipCode"
                       name="billingData[zipCode]"
                       value="{ billingData.zipCode }">
               <div v-if="errors.billingData.zipCode" v-model="errors" class="h-16 flex flex-row justify-start items-center capitalized shadow-md bg-red-600 text-1rem tablet-portrait:text-1.25rem p-4 text-white">
                   <img src="/assets/svg-icons/error.svg" class="h-full mr-4"> {{ errors.billingData.zipCode }}
               </div>
            </div>

            <!-- COUNTRY -->
            <!-- <div class="form-group">
                <label for="country" class="text-formi-blue source-sans text-1.25rem">Country</label>
                <input type="text" disabled
                       id="country"
                       class="form-control mb-2 bg-transparent border-2 border-formi-blue text-formi-yellow h-16 w-full px-5 text-1.5rem"
                       v-model="billingData.country"
                       name="billingData[country]"
                       value="{ billingData.country }">
            </div> -->
        </div>

        <div id="shippingdata-wrapper">

            <!-- PAYMENT DETAILS -->
            <div class="flex flex-row justify-between mt-2 laptop:mt-20">
                <h1 class="dinpro-black text-1.5rem tablet-portrait:text-3rem text-formi-blue text-center w-full">Shipping Details</h1>
            </div>

            <!-- USE BILLING AS SHIPPING -->
            <div class="form-group mt-2">

                <div class="w-full flex flex-row flex-wrap justify-center items-center text-white"
                    @click="toggleBilling()">
                    <div class="relative shadow-md dinpro-black mb-2 h-full w-full laptop:w-2/5 laptop:mr-5 flex-center text-3rem leading-none cursor-pointer select-none">
                        <div class="transition-all-250ms h-full toggle w-1/2 absolute bg-formi-yellow"
                            :class="[ this.useBillingAsShipping ? 'left-0' : 'right-0']"
                        ></div>
                        <div class="w-1/2 p-5 flex-center z-50">
                            <img class="h-10" src="/assets/svg-icons/verify-sign.svg">
                        </div>
                        <div class="w-1/2 p-5 flex-center z-50">
                            <img class="h-10" src="/assets/svg-icons/close.svg">
                        </div>
                    </div>
                    <div class="order-first w-full latop:w-3/5 text-formi-blue mb-2 dinpro-black text-1.25rem tablet-portrait:text-1.5rem text-center h-full flex-center">I want to use the billing address as shipping address </div>
                </div>

            </div>

            <!-- TITLE -->
            <div class="form-group">
                <label for="method" class="text-formi-blue source-sans text-1.25rem">Choose a title</label>
                <select id="method"
                        class="form-control bg-transparent border-2 border-formi-blue text-formi-yellow h-16 w-full px-5 text-1.5rem"
                        v-model="shippingData.selectedTitle">
                    <option v-for="title in titles">{{ title }}</option>
                </select>
            </div>

            <!-- givenName -->
            <div class="form-group">
                <label for="givenName" class="text-formi-blue source-sans text-1.25rem">Given name</label>
                <input type="text"
                       id="givenName"
                       @change="clearError('shippingData', 'givenName')"
                       class="form-control bg-transparent border-2 border-formi-blue text-formi-yellow h-16 w-full px-5 text-1.5rem"
                       v-model="shippingData.givenName"
                       name="shippingData[givenName]"
                       value="{ shippingData.givenName }">
               <div v-if="errors.shippingData.givenName" v-model="errors" class="h-16 flex flex-row justify-start items-center capitalized shadow-md bg-red-600 text-1rem tablet-portrait:text-1.25rem p-4 text-white">
                   <img src="/assets/svg-icons/error.svg" class="h-full mr-4"> {{ errors.shippingData.givenName }}
               </div>
            </div>

            <!-- familyName -->
            <div class="form-group">
                <label for="familyName" class="text-formi-blue source-sans text-1.25rem">Family name</label>
                <input type="text"
                       id="familyName"
                       @change="clearError('shippingData', 'familyName')"
                       class="form-control bg-transparent border-2 border-formi-blue text-formi-yellow h-16 w-full px-5 text-1.5rem"
                       v-model="shippingData.familyName"
                       name="shippingData[familyName]"
                       value="{ shippingData.familyName }">
               <div v-if="errors.shippingData.familyName" v-model="errors" class="h-16 flex flex-row justify-start items-center capitalized shadow-md bg-red-600 text-1rem tablet-portrait:text-1.25rem p-4 text-white">
                   <img src="/assets/svg-icons/error.svg" class="h-full mr-4"> {{ errors.shippingData.familyName }}
               </div>
            </div>

            <!-- STREETADDRESS1 -->
            <div class="form-group">
                <label for="streetAddress1" class="text-formi-blue source-sans text-1.25rem">Street address</label>
                <input type="text"
                id="streetAddress1"
                @change="clearError('shippingData', 'streetAddress1')"
                class="form-control bg-transparent border-2 border-formi-blue text-formi-yellow h-16 w-full px-5 text-1.5rem"
                v-model="shippingData.streetAddress1"
                name="shippingData[streetAddress1]"
                value="{ shippingData.streetAddress1 }">
                <div v-if="errors.shippingData.streetAddress1" v-model="errors" class="h-16 flex flex-row justify-start items-center capitalized shadow-md bg-red-600 text-1rem tablet-portrait:text-1.25rem p-4 text-white">
                    <img src="/assets/svg-icons/error.svg" class="h-full mr-4"> {{ errors.shippingData.streetAddress1 }}
                </div>
            </div>

            <!-- STREETADDRESS2 -->
            <div class="form-group">
                <label for="streetAddress2" class="text-formi-blue source-sans text-1.25rem">Additional street address</label>
                <input type="text"
                id="streetAddress2"
                class="form-control bg-transparent border-2 border-formi-blue text-formi-yellow h-16 w-full px-5 text-1.5rem"
                v-model="shippingData.streetAddress2"
                name="shippingData[streetAddress2]"
                value="{ shippingData.streetAddress2 }">
            </div>

            <!-- CITY -->
            <div class="form-group">
                <label for="city" class="text-formi-blue source-sans text-1.25rem">City</label>
                <input type="text"
                       id="city"
                       @change="clearError('shippingData', 'city')"
                       class="form-control bg-transparent border-2 border-formi-blue text-formi-yellow h-16 w-full px-5 text-1.5rem"
                       v-model="shippingData.city"
                       name="shippingData[city]"
                       value="{ shippingData.city }">
               <div v-if="errors.shippingData.city" v-model="errors" class="h-16 flex flex-row justify-start items-center capitalized shadow-md bg-red-600 text-1rem tablet-portrait:text-1.25rem p-4 text-white">
                   <img src="/assets/svg-icons/error.svg" class="h-full mr-4"> {{ errors.shippingData.city }}
               </div>
            </div>

            <!-- STATE -->
            <div class="form-group">
                <label for="method" class="text-formi-blue source-sans text-1.25rem">State</label>
                <select id="method"
                        class="form-control bg-transparent border-2 border-formi-blue text-formi-yellow h-16 w-full px-5 text-1.5rem"
                        v-model="shippingData.selectedState">
                    <option v-for="state in states">{{ state.name }}</option>
                </select>
            </div>

            <!-- ZIP CODE -->
            <div class="form-group">
                <label for="zipCode" class="text-formi-blue source-sans text-1.25rem">Postalcode</label>
                <input type="text"
                       id="zipCode"
                       @change="clearError('shippingData', 'zipCode')"
                       class="form-control bg-transparent border-2 border-formi-blue text-formi-yellow h-16 w-full px-5 text-1.5rem"
                       v-model="shippingData.zipCode"
                       name="shippingData[zipCode]"
                       value="{ shippingData.zipCode }">
               <div v-if="errors.shippingData.zipCode" v-model="errors" class="h-16 flex flex-row justify-start items-center capitalized shadow-md bg-red-600 text-1rem tablet-portrait:text-1.25rem p-4 text-white">
                   <img src="/assets/svg-icons/error.svg" class="h-full mr-4"> {{ errors.shippingData.zipCode }}
               </div>
            </div>

            <!-- COUNTRY -->
            <!-- <div class="form-group">
                <label for="country" class="text-formi-blue source-sans text-1.25rem">Country</label>
                <input type="text" disabled
                       id="country"
                       class="form-control bg-transparent border-2 border-formi-blue text-formi-yellow h-16 w-full px-5 text-1.5rem"
                       v-model="shippingData.country"
                       name="shippingData[country]"
                       value="{ shippingData.country }">
            </div> -->

        </div>

        <!-- ORDER SUMMARY -->
        <div class="flex flex-col">

            <!-- PAYMENT DETAILS -->
            <div class="flex flex-row justify-between mt-2 laptop:mt-20">
                <h1 class="dinpro-black text-1.5rem tablet-portrait:text-3rem text-formi-blue text-center w-full">Order Summary</h1>
            </div>

            <!-- SHIPPING & TOTAL -->
            <div class="flex flex-col my-5 w-full">
                <div class="flex flex-row justify-between mb-1">
                    <h1 class="dinpro-black text-1rem tablet-portrait:text-1.5rem text-formi-blue h-full leading-none">Unit cost:</h1>
                    <span class="aller-display h-full flex flex-row justify-start items-start leading-none text-1rem tablet-portrait:text-1.5rem text-formi-blue">&dollar;{{ selectedProduct.cost }}</span>
                </div>
                <div class="flex flex-row justify-between mb-1">
                    <h1 class="whitespace-no-wrap dinpro-black text-1rem tablet-portrait:text-1.5rem text-formi-blue h-full leading-none">Shipping cost:</h1>
                    <span class="whitespace-no-wrap aller-display h-full flex flex-row justify-start items-start leading-none text-1rem tablet-portrait:text-1.5rem text-formi-blue">+ &dollar;{{ shippingCost }}</span>
                </div>
                <div class="flex flex-row justify-between mb-2">
                    <h1 class="whitespace-no-wrap dinpro-black text-1rem tablet-portrait:text-1.5rem text-formi-blue h-full leading-none">VAT 21%:</h1>
                    <span class="whitespace-no-wrap aller-display h-full flex flex-row justify-start items-start leading-none text-1rem tablet-portrait:text-1.5rem text-formi-blue border-b-4 border-formi-blue pb-1">+ &dollar;{{ vatAmount }}</span>
                </div>
                <div class="flex flex-row justify-between mt-2">
                    <h1 class="whitespace-no-wrap dinpro-black text-1.25rem tablet-portrait:text-2rem text-formi-blue h-full leading-none">Total amount:</h1>
                    <span class=" whitespace-no-wrap aller-display h-full flex flex-row justify-start items-start leading-none text-1.25rem tablet-portrait:text-2rem text-formi-blue">&dollar;{{ amount }}</span>
                </div>
            </div>

        </div>

        <p v-if="errors.billingData.length">
            <ul>
                <b>Please correct the following error(s) in billing data:</b>
                <li v-for="error in errors.billingData">{{ error }}</li>
            </ul>
        </p>
        <p v-if="errors.shippingData.length">
            <ul>
                <b>Please correct the following error(s) in billing data:</b>
                <li v-for="error in errors.shippingData">{{ error }}</li>
            </ul>
        </p>

        <div class="form-group mb-2">
            <label for="zipCode" class="text-formi-blue source-sans text-1.25rem">Email</label>
            <input type="email"
            id="email"
            @change="clearEmailError()"
            class="form-control bg-transparent border-2 border-formi-blue text-formi-yellow h-16 w-full px-5 text-1.5rem"
            v-model="email">
            <div v-if="errors.email" v-model="errors" class="h-16 flex flex-row justify-start items-center capitalized shadow-md bg-red-600 text-1rem tablet-portrait:text-1.25rem p-4 text-white">
                <img src="/assets/svg-icons/error.svg" class="h-full mr-4"> {{ errors.email }}
            </div>
        </div>

        <!-- SUBMIT BUTTON -->
        <input @click.prevent="checkForm()" type="submit" value="checkout" class="w-full h-16 text-1.5rem transition-all-250ms whitespace-no-wrap cursor-pointer tracking-wide flex flex-row items-center justify-center bg-formi-blue text-white shadow-md aller-display tracking-wide uppercase tablet-portrait:h-20 desktop:text-1.5rem desktop:py-5 desktop:px-10">
    </form>

</template>

<script>
    export default {
        mounted(){

            this.products = JSON.parse(this.data);
            this.selectedProduct = this.products[this.getSelectedProductIndex];

            // states
            this.states = JSON.parse(this.states);
            this.shippingData.selectedState = this.states[0].name;
            this.billingData.selectedState = this.states[0].name;

            this.updateVatAmount();
            this.updateTotalCost();
        },
        props: ['data', 'states'],
        computed: {
            getSelectedProductIndex: function(){
                for(var index = 0; index < this.products.length; index++) {
                    if(this.products[index].isSelected){
                        return index;
                    }
                }
            }
        },
        data() {
            return {
                csrf: document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                errorCount: 0,
                errors: {
                    email: "",
                    billingData: {
                        selectedTitle: "",
                        givenName: "",
                        familyName: "",
                        streetAddress1: "",
                        streetAddress2: "",
                        city: "",
                        selectedState: "",
                        zipCode: "",
                        country: "",
                    },
                    shippingData: {
                        selectedTitle: "",
                        givenName: "",
                        familyName: "",
                        streetAddress1: "",
                        streetAddress2: "",
                        city: "",
                        selectedState: "",
                        zipCode: "",
                        country: "",
                    }
                },

                // cost
                amount: 0,
                vatAmount: 0,
                shippingCost: 15,
                email: "",

                useBillingAsShipping: false,

                // billingdata
                billingData: {
                    selectedTitle: "Mr.",
                    givenName: "",
                    familyName: "",
                    streetAddress1: "",
                    streetAddress2: "",
                    city: "",
                    selectedState: "",
                    zipCode: "",
                    country: "US",
                },

                // shippingdata
                shippingData: {
                    selectedTitle: "Mr.",
                    givenName: "",
                    familyName: "",
                    streetAddress1: "",
                    streetAddress2: "",
                    city: "",
                    selectedState: "",
                    zipCode: "",
                    country: "US",
                },

                selectedProduct: {},
                titles: ['Mr.', 'Ms.'],
                products: []
            }
        },
        methods: {
            updateVatAmount(){
                this.vatAmount = (this.selectedProduct.cost * .21);
            },
            updateTotalCost(){
                this.amount = this.shippingCost + this.selectedProduct.cost + this.vatAmount;
            },
            setSelectedProduct(product){
                this.selectedProduct.isSelected = false;
                this.selectedProduct = product;
                this.selectedProduct.isSelected = true;
                this.updateVatAmount();
                this.updateTotalCost();
            },
            toggleBilling: function (event) {
                //toggle use billing
                if(this.useBillingAsShipping){
                    this.useBillingAsShipping = false;
                    this.shippingData = {};
                }
                else {
                    this.useBillingAsShipping = true;
                    this.shippingData = this.billingData;
                }

            },
            submitForm: function(){
                // console.log('submitting form');
                axios.post('/orders/checkout', {
                    vatAmount: this.vatAmount,
                    shippingCost: this.shippingCost,
                    amount: this.amount,
                    email: this.email,
                    product: this.selectedProduct,
                    billingData: this.billingData,
                    shippingData: this.shippingData
                })
                .then(function (response) {
                    if(response.data){
                        var redirectUrl = response.data._links.checkout.href;
                        // console.log(response);
                        window.location.href = redirectUrl;
                    }
                })
                .catch(function(error) {
                    // console.log(error);
                });
           },
           clearError: function(array, property){
                    this.errors[array][property] = "";
           },
           clearEmailError: function(){
                   this.errors.email = "";
           },
            checkForm: function () {
                if (this.checkData()) {
                    this.billingData.email = this.email;
                    this.shippingData.email = this.email;
                    this.submitForm();
                }
            },
            checkData: function(){

                this.errorCount = 0;

                for (var property in this.billingData) {
                    if(property !== "streetAddress2"){
                        if (this.billingData[property] === "") {
                            this.errors.billingData[property] = property + " is required.";
                            this.errorCount++;
                        }
                    }
                }

                for (var property in this.shippingData) {
                    if(property !== "streetAddress2"){
                        if (this.billingData[property] === "") {
                            this.errors.shippingData[property] = property + " is required.";
                            this.errorCount++;
                        }
                    }
                }

                if(this.email === ""){
                    this.errors.email = "email is required.";
                    this.errorCount++;
                }

                if(this.errorCount > 0){
                    return false;
                }
                else {
                    return true;
                }
            }
        }
    }
</script>
