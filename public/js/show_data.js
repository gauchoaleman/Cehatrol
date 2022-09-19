const users_url = 'http://'+window.location.host+'/users';
const posts_url = 'http://'+window.location.host+'/posts';
const table = $('#myData');
/**
 * Fetches the users + their posts and adds rows to the main table.
 */
async function show_table() {
    try {
        const users = await fetchUsers();
        for (const user of users) {
            table.append(`<tr><td colspan=2>${user.user_name}</td></tr>`);
            try {
                const posts = await fetchPosts(user.user_id);
                posts.forEach(post => {
                    table.append(`<tr><td width=180>${post.post_title}</td><td>${post.post_content}</td></tr>`);
                });
            } catch (e) {
                console.log(e);
            }
        }
    } catch (e) {
        console.log(e);
    }
}

/**
 * Fetches users and returns JSON-request-data on success.
 * @returns {Promise<any>}
 */
async function fetchUsers() {
    const response = await fetch(users_url);
    if (response.ok) {
        return await response.json();
    } else {
        throw new Error(`There was an error trying to retrieve users. Status: ${response.status}`);
    }
}

/**
 * Fetches posts and returns JSON-request-data on success.
 * @returns {Promise<any>}
 */
async function fetchPosts(user_id) {
    const response = await fetch(posts_url+'/'+user_id);
    if (response.ok) {
        return await response.json();
    } else {
        throw new Error(`There was an error trying to retrieve posts. Status: ${response.status}`);
    }
}

const btn = document.getElementById('btn');

btn.addEventListener('click', () => {
  btn.style.display = 'none';
  const box = document.getElementById('box');
  box.style.display = 'block';
});
