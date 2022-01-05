<template>
    <div>
        {{ me.id }}
    </div>
    
</template>
<script>
import gql from 'graphql-tag';

export default {
    data() {
        return {
            me: null,
        };
    },
    apollo: {
        me: gql` query {
                me {
                    id
                    email
                }
            }
        `,
    },
};
</script>
