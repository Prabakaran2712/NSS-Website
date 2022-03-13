const SideBar = ({ changeCurAward, curAward }) => {
    return (
        <div className="col-sm-12 col-md-3">
            <ul className="awards-list">
                {awards.map((award) => {
                    return <li className={`fw-bold ${curAward.id === award.id ? 'activeAward' : 'inactiveAward'}`} onClick={() => changeCurAward(award.id)}>{award.title}
                    </li>
                })}
            </ul>
        </div>
    );
}