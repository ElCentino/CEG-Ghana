
const modules = require('./NodeModules');

const jobs = {
    flexible: [{
            jobDes: "Front End Node",
            remote: false
        },
        {
            jobDes: "Back End Node",
            remote: false
        },
        {
            jobDes: "Front End Python",
            remote: false
        }
    ],
    nonFlexible: [{
            jobDes: "Back End Java",
            remote: true
        },
        {
            jobDes: "Back End C++",
            remote: true
        },
        {
            jobDes: "Back End Python",
            remote: false
        }
    ]
}
const searchJobs = (data, callback) => {

    var result = null;

    if (typeof data.flexibleHours !== 'undefined' && typeof data.remote !== 'undefined') {

        if (data.flexibleHours === true) {
            result = locateJobs(data.remote);
        } else {
            result = locateOtherJobs(data.remote);
        }

    } else {
        return new Error("Input Useful Parameters");
    }

    if (typeof callback === 'function') {
        callback(result);
    }

}

const locateJobs = remote => {

    const jobTypes = jobs.flexible.filter(item => {
        return item.remote === remote;
    });

    return jobTypes;
};

const locateOtherJobs = remote => {

    const jobTypes = jobs.nonFlexible.filter(item => {
        return item.remote === remote;
    });

    return jobTypes;
};

const jobOptions = {
    // flexibleHours: Boolean(modules.grabber("--flexible")),
    // remote: Boolean(modules.grabber("--remote"))
    flexibleHours: true,
    remote: false
};

const displayResults = results => {

    results.forEach(item => {

        const { jobDes : description, remote : isRemote } = item;

        console.log("------------------------------");
        console.log("Job Description : ", description);
        console.log(`This is a ${isRemote === true ? 'remote' : 'not a remote'} job`);
        console.log("------------------------------");
    });
}

searchJobs(jobOptions, (result) => {

    if (result.length <= 0) {
        console.log("No Jobs Found please");
    } else {
        displayResults(result);
    }
});