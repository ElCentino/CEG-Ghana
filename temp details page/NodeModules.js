
module.exports = {

    grabber: (arg) => {
        var index = process.argv.indexOf(arg);
        return index === -1 ? null : process.argv[index+1];
    }
};