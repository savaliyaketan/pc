
## Logging In

Following credentials can be used to log in the system

<table>
    <thead>
       <tr>
            <th>Sl</th>
            <th>Role</th>
            <th>Email Address</th>
            <th>Password</th>
       </tr> 
    </thead>
    <tbody>
        <tr>
            <td>01</td>
            <td>Admin</td>
            <td>admin@admin.com</td>
            <td>password</td>
        </tr>
    </tbody>
        <tbody>
        <tr>
            <td>02</td>
            <td>Author</td>
            <td>author@author.com</td>
            <td>password</td>
        </tr>
    </tbody>
        <tbody>
        <tr>
            <td>03</td>
            <td>Editor</td>
            <td>editor@editor.com</td>
            <td>password</td>
        </tr>
    </tbody>
        <tbody>
        <tr>
            <td>04</td>
            <td>User</td>
            <td>user@user.com</td>
            <td>password</td>
        </tr>
    </tbody>
</table>
<br>



## Installation

First clone this repository. Navigate to root of the project and then

<pre>
    <code>composer install</code>
    <code>npm install</code>
</pre>

Copy the contents of .env.example to .env file.

<pre>
    <code>php artisan key:generate</code>
    <code>php artisan migrate</code>
    <code>php artisan db:seed</code>
</pre>

Compile the assets and run development server by

<pre>
    <code>npm run dev</code>
</pre>

Isnitiate your server on a new terminal

<pre>
    <code>php artisan serve</code>
</pre>

