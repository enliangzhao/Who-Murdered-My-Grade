/**
 * Initialize monitoring for a server push command.
 * @param key Key we will receive.
 */
function pushInit(key) {
    var conn = new WebSocket('ws://webdev.cse.msu.edu/ws');
    conn.onopen = function (e) {
        console.log("Connection to push established!");
        conn.send(key);
    };

    conn.onmessage = function (e) {
        try {
            var msg = JSON.parse(e.data);
            if (msg.cmd === "reload") {
                location.reload();
            }
        } catch (e) {
        }
    };
}

pushInit("$key");