<template>
    <div class="note">
        <button class="remove-note" title="Remove" @click="removeNote">X</button>
        {{ note.note }}
    </div>
</template>

<script>
export default {
    name: "NoteItem",
    props: [
        'note'
    ],
    data(){
        return {
            noteForm: this.$inertia.form()
        }
    },
    methods:{
        removeNote(){
            this.noteForm.delete('/notes/' + this.note.id + '/delete')
        }
    }
}
</script>

<style scoped>

</style>
