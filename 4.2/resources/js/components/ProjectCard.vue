<template>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{project.title}}</h5>
            <p class="card-text">{{project.description}}</p>
        </div>
    </div>
</template>
<script>
export default {
    props: ['project']
}
</script>
