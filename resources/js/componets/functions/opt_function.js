export function allOpt() {

    const add = (a, b) => {
        var c = a + b
        console.log(c);
    }

    const sub = (a, b) => {
        var c = a - b
        console.log(c);

    }

    return {
        add,
        sub
    }

}