const Content = ({ curAward }) => {
    return <div class="col" id="curSession">
        <div class="container">
            <h3 class="display-6 mt-3">{curAward.title}</h3>
            <img class="img-fluid" src={curAward.image} alt="session-image" />
            <p class="mt-3 fs-6">{curAward.content}</p>
        </div>
    </div>
}