const SideBar = ({ changeCurView, curView, views }) => {
    return (
        <div className="col-sm-12 col-md-3">
            <ul className="views-list">
                {views.map((view) => {
                    return <li className={`fw-bold ${curView.id === view.id ? 'activeView' : 'inactiveView'}`} onClick={() => changeCurView(view.id)}>{view.title}
                    </li>
                })}
            </ul>
        </div>
    );
}