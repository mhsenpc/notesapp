<template>
    <div class="note">
        <v-textarea  v-model="newNoteForm.note" @blur="addNote" placeholder="Your note here"
                    :error-messages="_error('note', 'createNote')"></v-textarea>
    </div>
</template>

<script>
export default {
    name: "NewNote",
    data() {
        return {
            newNoteForm: this.$inertia.form({
                note: ''
            })
        }
    },
    methods: {
        addNote() {
            this.newNoteForm.post('/notes/store')
            this.newNoteForm.note = '';
        }
    }
}
</script>

<style scoped>

</style>
