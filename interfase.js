
class LoggerConsole {
    constructor(message) {
        this.message = message;
    }

    log() {
        return console.log(this.message)
    }
}

class LoggerDiv {
    constructor(message) {
        this.message = message;
        this.body = document.querySelector('body');
    }

    log() {
        this.body.append(this.message)
    }
}

class ButtonCreate {
    constructor() {
        const button = document.createElement('button');
        button.style.width = '150px';
        button.style.height = '150px';
        document.querySelector('body').append(button);
    }
}

class ButtonCreateMethodSet extends ButtonCreate {
    constructor(logger) {
        super();
        this.logger = logger
        this.setAction(this.logger);
    }

    setAction(logger) {
        document.querySelector('button').addEventListener('click', function (){
           logger.log();
        });
    }
}

const conssoleExemp = new LoggerConsole('Yoba');

const conssoleDiveExemp = new LoggerDiv('Yoba');

new ButtonCreateMethodSet(conssoleDiveExemp);


