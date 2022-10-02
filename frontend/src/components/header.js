import React from "react";

const Header = () => (
  <nav className="navbar navbar-expand-md navbar-light shadow-sm header_fe mb-3">
    <div className="container ">
      <div className="d-flex port-header">
        <div className="p-2" data-toggle="collapse">
          <p className="navbar-brand">Job Vacancy</p>
        </div>
        <div className="p-2" data-toggle="collapse">
          <p className="navbar-brand">
            <i className="fa fa-phone" aria-hidden="true"></i>&nbsp;
            <small>+067 409 551</small>
          </p>
        </div>
      </div>
    </div>
  </nav>
);

export default Header;
