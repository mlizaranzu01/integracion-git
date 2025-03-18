<?php
include('../../../inc/includes.php');

Session::checkRight("config", READ);

echo "<h2>Commits Recientes de GitLab</h2>";

$gitlab_url = 'https://gitlab.com/api/v4'; //CAMBIAR
$token = 'YOUR_GITLAB_TOKEN'; //CAMBIAR
$project_id = 'your_project_id'; //CAMBIAR
$endpoint = "/projects/{$project_id}/repository/commits"; //CAMBIAR

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $gitlab_url . $endpoint);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HTTPHEADER, ["PRIVATE-TOKEN: {$token}"]);
$response = curl_exec($ch);
curl_close($ch);

$commits = json_decode($response, true);

echo "<table border='1'>";
echo "<tr><th>Commit</th><th>Mensaje</th><th>Fecha</th></tr>";

foreach ($commits as $commit) {
    echo "<tr>
            <td>{$commit['id']}</td>
            <td>{$commit['message']}</td>
            <td>{$commit['created_at']}</td>
          </tr>";
}
echo "</table>";
?>
