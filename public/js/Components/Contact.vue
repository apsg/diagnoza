<template>
    <div>

        <div v-if="success" class="p-3 alert alert-success">
            Dziękujemy za kontakt, odezwiemy się do Ciebie.
        </div>

        <div class="alert alert-danger" v-for="(error, key) in errors">
            <p v-for="(item, k) in error">
                {{ item }}
            </p>
        </div>

        <form
            @submit.prevent="submitForm"
            class="contact-form"
            method="POST">
            <div class="col-md-4 padding-bottom-20">
                <div class="form-group">
                    <input id="name"
                           class="form-control"
                           name="name"
                           autocomplete="off"
                           placeholder="Imię"
                           type="text"
                           v-model="form.name"
                           required
                    />
                </div>
            </div>
            <div class="col-md-4 padding-bottom-20">
                <div class="form-group">
                    <input id="email"
                           class="form-control"
                           name="email"
                           autocomplete="off"
                           placeholder="E-mail"
                           type="email"
                           v-model="form.email"
                           required
                    >
                </div>
            </div>
            <div class="col-md-4 padding-bottom-20">
                <div class="form-group">
                    <input id="phone"
                           class="form-control"
                           name="phone"
                           autocomplete="off"
                           placeholder="Telefon"
                           type="phone"
                           v-model="form.phone">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Kogo dotyczy diagnoza?</label>
                    <select
                        name="age"
                        class="form-control"
                        required
                        v-model="form.age"
                    >
                        <option>... wybierz</option>
                        <option value="ASD dorosly">Diagnoza ASD osoby dorosłej</option>
                        <option value="ASD dziecko">Diagnoza ASD dziecka</option>
                        <option value="ADHD dorosly">Diagnoza ADHD osoby dorosłej</option>
                        <option value="ADHD dziecko">Diagnoza ADHD dziecka</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Czy wywiad wstępny oraz podsumowanie mogą odbywać się w formie zdalnej
                        (on-line)?</label>
                    <select
                        name="wywiad"
                        class="form-control"
                        required
                        v-model="form.remote"
                    >
                        <option>... wybierz</option>
                        <option value="tak">Tak</option>
                        <option value="nie">Nie</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Jakich zaimków używać w komunikacji?</label>
                    <select
                        name="zaimki"
                        class="form-control"
                        required
                        v-model="form.pronoun"
                    >
                        <option>... wybierz</option>
                        <option value="ona">ona/jej</option>
                        <option value="on">on/jego</option>
                        <option value="inne">inne (napisz w treści)</option>
                    </select>
                </div>
            </div>
            <span class="clearfix"></span>
            <div class="contact-message col-md-12">
                <div class="form-group margin-bottom-0">
                    <textarea
                        v-model="form.message"
                        id="message"
                        class="form-control textarea"
                        rows="3"
                        name="message"
                        placeholder="Wiadomość"
                    ></textarea>
                </div>
            </div>
            <div class="col-md-12 padding-30">
                <p>Przesyłając wiadomość przez formularz kontaktowy wyrażasz zgodę na przetwarzanie
                    wskazanych danych osobowych przez Aleksandrę Magda prowadzącą działalność gospodarczą
                    pod firmą Wzmocnienie Aleksandra Magda. Więcej na temat przetwarzania danych osobowych
                    przeczytasz w <a target="_blank" href="https://wzmocnienie.pl/files/polityka.pdf">Polityce
                        prywatności</a>.
                </p>
                <label>
                    <input type="checkbox" class="" required name="accept" v-model="form.accept"> Akceptuję
                    <a href="https://wzmocnienie.pl/files/regulamin.pdf" target="_blank">Regulamin</a> oraz
                    <a target="_blank" href="https://wzmocnienie.pl/files/polityka.pdf">Politykę prywatności</a>
                </label>
            </div>
            <div class="col-md-12 padding-top-30">
                <button
                    type="submit"
                    class="btn btn-default btn-xl btn-normal margin-top-20 contact-btn"
                    :disabled="disabled"
                >
                    Wyślij
                </button>
            </div>
        </form>
    </div>
</template>

<script>
export default {
    name: "Contact",

    data() {
        return {
            form: {
                name: '',
                email: '',
                phone: '',
                age: '',
                remote: 'tak',
                message: '',
                accept: false,
            },
            disabled: false,
            success: false,
            errors: {},
        }
    },

    methods: {
        submitForm() {
            this.disabled = true;
            this.success = false;
            this.errors = {};

            axios.post('/contact', this.form)
                .then(() => {
                    this.success = true;
                    this.clearForm();
                })
                .catch((err) => {
                    if (err.response.data.errors) {
                        this.errors = err.response.data.errors;
                    } else {
                        this.errors = {err:["Przepraszamy, wystąpił jakiś błąd. Spróbuj napisać do nas bezpośrednio na adres ados@wzmocnienie.pl"]}
                    }
                    this.disabled = false;
                });
        },

        clearForm() {
            this.form = {
                name: '',
                email: '',
                phone: '',
                age: '',
                remote: 'tak',
                message: '',
                accept: false,
            };
            this.disabled = false;
        }
    }
}
</script>

<style scoped>

</style>
