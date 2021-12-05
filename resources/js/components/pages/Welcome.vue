<template>
    <div>
       <p @click="increaceMe()">{{counter}}</p>
    </div>
</template>
<script>
export default {
    data() {
        return {
            age:10,
            imageSrc: "FDFDDF",
            imageAlt: "dffddf",
            counter:5
        };
    },
    methods: {
        sayMyName(){
            return "Hello Semary" . this.age
        },
        increaceMe(){
            this.counter++
        }
    },
    created() {},
};
</script>
