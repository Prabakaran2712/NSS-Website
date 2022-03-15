const AwardContent = ({ award }) => {
    return <div class="col" id="curSession">
        <div class="container">
            <h3 class="display-6 mt-3">{award.title}</h3>
            <img class="img-fluid" src={award.image} alt="session-image" />
            <p class="mt-3 fs-6">{award.content}</p>
        </div>
    </div>
}