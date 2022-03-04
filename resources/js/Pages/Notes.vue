<template>
    <v-container>
        <NoteItem v-for="note in notes" :note="note" />
        <NewNote />
    </v-container>
</template>

<script>
import NoteItem from "@/Pages/NoteItem";
import NewNote from "@/Pages/NewNote";

export default {
    name: "Notes",
    components: {NewNote, NoteItem},
    props: [
        'notes'
    ],
}
</script>

<style scoped>

</style>
