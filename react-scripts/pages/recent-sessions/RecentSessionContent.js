const RecentSessionContent = ({ session }) => {
    return <div class="col" id="curSession">
        <div class="container">
            <h3 class="display-6 mt-3">{session.title}</h3>
            <img class="img-fluid" src={session.image} alt="session-image" />
            <p class="mt-3 fs-6">{session.content}</p>
        </div>
    </div>
}