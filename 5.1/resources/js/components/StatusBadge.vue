<template>
    <span class="badge" :class="classObj">
        {{getStatusText()}}
    </span>
</template>
<script>
export default {
    props: ['status'],
    data() {
        return {
            classObj: {
                'badge-success': this.status === "COMP",
                'badge-secondary': this.status === "OPEN",
                'badge-danger': this.status === "HOLD"
            }
        };
    },
    methods: {
        getStatusText() {
            let status = this.status.toUpperCase();

            if (status === "COMP") {
                return 'Complete';
            } else if (status === 'OPEN') {
                return 'Open';
            }

            return 'Hold';
        }
    }
}
</script>

