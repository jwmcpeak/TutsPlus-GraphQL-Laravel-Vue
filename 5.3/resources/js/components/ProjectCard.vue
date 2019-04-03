<template>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">
                <router-link :to="`/project/${project.id}`">
                    {{project.title}}
                </router-link>
            </h5>
            <p class="card-text">{{project.description}}</p>
        </div>
    </div>
</template>
<script>
export default {
    props: ['project']
}
</script>
