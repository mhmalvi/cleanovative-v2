export default function Validation() {
    const name = (value) => {
        const regx = /^[A-Za-z\s]+$/;
        return value.length > 5 && regx.test(value) ? true : false;
    };

    const alphanumeric = (value) => {
        const regx = /^[A-Za-z0-9\s]+$/;
        return value.length > 6 && regx.test(value) ? true : false;
    };

    const email = (value) => {
        const regx =
            /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

        return value.length > 5 && regx.test(value) ? true : false;
    };

    const phoneNumber = (value) => {
        const regx = /^[+]?[0-9\s]+$/;
        return value.length > 8 && regx.test(value) ? true : false;
    };

    return {
        name,
        email,
        alphanumeric,
        phoneNumber,
    };
}
