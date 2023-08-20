const infoDom = document.getElementById('info');

async function fetchWithTimeout(url, options, timeout) {
    const controller = new AbortController();
    const timeoutId = setTimeout(() => controller.abort(), timeout);
  
    const response = await fetch(url, { options, signal: controller.signal });
  
    clearTimeout(timeoutId);
  
    return response;
}

async function updateInfo(){
    try {
        const timeoutMilliseconds = 500; // タイムアウトを設定するミリ秒
        const info = await fetchWithTimeout('info.php', {}, timeoutMilliseconds);
        const infoText = await info.text();
        infoDom.innerHTML = infoText;
    } catch (error) {
        console.error('リクエストエラー:', error);
        infoDom.innerHTML = '<p class="fs-3">Pod is offline.</h2>'
    }
}

setInterval(updateInfo, 500);
document.addEventListener('DOMContentLoaded', updateInfo);
